@extends('layout')
@section('content')

<div class="container">
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
    <p>O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por e
        stas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um
        espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica,
        mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que c
        ontinham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem ve
        rsões do Lorem Ipsum </p>
    <p>O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por e
        stas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um
        espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica,
        mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que c
        ontinham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem ve
        rsões do Lorem Ipsum </p>
    <p>O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por e
        stas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um
        espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica,
        mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que c
        ontinham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem ve
        rsões do Lorem Ipsum </p>
    <p>O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por e
        stas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um
        espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica,
        mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que c
        ontinham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem ve
        rsões do Lorem Ipsum </p>
    <p>O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por e
        stas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um
        espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica,
        mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que c
        ontinham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem ve
        rsões do Lorem Ipsum </p>
    <p>O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por e
        stas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um
        espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica,
        mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que c
        ontinham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem ve
        rsões do Lorem Ipsum </p>


    {{ $abatjours->links() }}
    @endif
</div>
@endsection

