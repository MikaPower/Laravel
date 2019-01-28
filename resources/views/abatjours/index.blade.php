@extends('layout')
@section('content')

<div class="container w-100">
    @if($abatjours->count())
    <table class="table" style="table-layout: fixed">
        <thead>
        <tr>
            <th scope="col" style="height: 100%">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $count=0;

        foreach ($abatjours as $abatjour) {
            if($count==0){                               //caso seja inicio da row
                echo "<tr>";
            }
            if($count==2) {
                ?>
                 <td>
                     <div class="card style">
                         <img class="card-img-top" src="/storage/images/{{$abatjour->imagemodels->filename}}" alt="Card image cap"
                              style="max-width: 100%;max-height:100%; height: auto;">
                         <div class="card-body">
                             <h5 class="card-title">Referencia: {{$abatjour->referencia}}</h5>
                             <h5 class="card-text">Nome: {{$abatjour->name}}</h5>
                             <h5 class="card-text">Preço: {{$abatjour->price}}</h5>
                             <a href="/abatjours/{{$abatjour->id}}" class="btn btn-primary">Detalhes</a>
                         </div>
                     </div>

                      </td>
        <?php
                $count=0;
              echo " </tr>";            //se for o ultima da row, fecho a row e reinicio count
            }
            else{
                ?>
          <td>
              <div class="card style">
                  <img class="card-img-top" src="/storage/images/{{$abatjour->imagemodels->filename}}" alt="Card image cap"
                       style="max-width: 100%;max-height:100%; height: auto;">
                  <div class="card-body">
                      <h5 class="card-title">Referencia: {{$abatjour->referencia}}</h5>
                      <h5 class="card-text">Nome: {{$abatjour->name}}</h5>
                      <h5 class="card-text">Preço: {{$abatjour->price}}</h5>
                      <a href="/abatjours/{{$abatjour->id}}" class="btn btn-primary">Detalhes</a>
                  </div>
              </div>
          </td>
        <?php
                $count++;
            }
        }
        ?>
        </tbody>
    </table>
    {{ $abatjours->links() }}
@endif
</div>










@endsection
