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
              <tr style="width: 1110px; height: 434px">
                  <?php
            }

            if($count==2) {
                ?>
                 <td >
                     <div class="card h-100">
                         <img class="card-img-top" src="/storage/images/{{$abatjour->imagemodels->filename}}" alt="Card image cap"
                              style="max-width: 100%;max-height:100%; height: auto;">
                         <div class="card-body" style="position: absolute;bottom: 0;">
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
          <td>
              <div class="card h-100">
                  <img class="card-img-top" src="/storage/images/{{$abatjour->imagemodels->filename}}" alt="Card image cap"
                       style="max-width: 100%;max-height:100%; height: auto;">
                  <div class="card-body" style="position: absolute;bottom: 0;">
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

