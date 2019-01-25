@extends('layout')
@section('content')

<div class="container">
    @if($abatjours->count())
    <table class="table" style="table-layout: fixed">
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
            if($count==0){                               //caso seja inicio da row
                echo "<tr>";
            }
            if($count==2) {
                ?>
                 <td>
                     <div class="card style" style="max-width: 100%;">
                         <img class="card-img-top" src="/storage/images/{{$abatjour->imagemodels->filename}}" alt="Card image cap"
                              style="max-width: 100%;max-height:100%; height: auto;">
                         <div class="card-body">
                             <h5 class="card-title">Card title</h5>
                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                             <a href="#" class="btn btn-primary">Go somewhere</a>
                         </div>
                     </div>










                      </td>
        <?php
                $count=0;
              echo " </tr>";            //se for o ultima da row, fecho a row e reinicio count
            }
            else{
                ?>
          <td><img src="/storage/images/{{$abatjour->imagemodels->filename}}" class="img-fluid" alt="Responsive image"
                   style="max-width: 100%;max-height:100%; height: auto;"/></td>
        <?php
                $count++;
            }
        }
        ?>
        </tbody>
    </table>
@endif
</div>










@endsection
