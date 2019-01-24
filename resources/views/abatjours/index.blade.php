@extends('layout')
@section('content')

<div class="container">
    @if($abatjours->count())
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
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
                echo "   <th scope=\"row\">1</th>";
            }
            if($count==2) {
                ?>
                 <td>  <img src="/storage/images/{{$abatjour->imagemodels->filename}}"
                            style="max-width: 100%;max-height:100%; height: auto;" alt="{{ $abatjour->imagemodels->filename  }}"/> </td>
        <?php
                $count=0;
              echo " </tr>";            //se for o ultima da row, fecho a row e reinicio count
            }
            else{
                ?>
          <td><img src="/storage/images/{{$abatjour->imagemodels->filename}}"
                   style="max-width: 100%;max-height:100%; height: auto;" alt="{{ $abatjour->imagemodels->filename  }}"/></td>
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
