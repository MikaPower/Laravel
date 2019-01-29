@extends('layout')
@section('content')

<div class="container w-100">
    @if($abatjours->count())
    <table class="table h-100">
        <thead>
        <tr>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $count=0;

        foreach ($abatjours as $abatjour) {
            if($count==0){
                ?>
              <tr>
                  <?php
            }

            if($count==2) {
                ?>
                 <td  style="max-width: 300px;max-height:225px; height: auto;width: auto">
                     <div class="card h-100" style="max-width: 300px">
                         <img class="card-img-top" src="/storage/images/{{$abatjour->imagemodels->filename}}" alt="Card image cap"
                           style="max-width: 300px;max-height:225px; height: auto;width: auto">
                         <div class="card-body">
                             <h5 class="card-title align-items-end">Referencia: {{$abatjour->referencia}}</h5>
                             <h5 class="card-text align-items-end">Nome: {{$abatjour->name}}</h5>
                             <h5 class="card-text align-items-end">Preço: {{$abatjour->price}}</h5>
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
          <td  style="max-width: 300px;max-height:225px; height: auto;width: auto">
              <div class="card h-100" style="max-width: 300px">
                  <img class="card-img-top" src="/storage/images/{{$abatjour->imagemodels->filename}}" alt="Card image cap"
                       style="max-width: 300px;max-height:225px; height: auto;width: auto">
                  <div class="card-body">
                      <h5 class="card-title align-items-end">Referencia: {{$abatjour->referencia}}</h5>
                      <h5 class="card-text align-items-end">Nome: {{$abatjour->name}}</h5>
                      <h5 class="card-text align-items-end">Preço: {{$abatjour->price}}</h5>
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

