<?php

echo '

Hoje nós vamos fazer um vídeo de animação usando linguagem Python no modelador Blehnder. <br><br>
<silence msec="300"/>


!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!

Faremos uma animação bem simples para que possamos percorrer todos os caminhos necessários até chegar na renderização.<br> <br>
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!


A renderização é a etapa final da produção do vídeo de animação. <br><br>
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!


Faremos a animação de um rato narigudo cujo nariz cresce como se ele fosse um pinocchio. <br>
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!


O nosso objetivo é fazer uma animação utilizando apenas comandos em Python. 

!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!



Esta forma programática de animar permite muito mais controle e rastreabilidade.<br>
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!


Para quem não sabe, rastreabilidade significa registrar todos os passos de um procedimento para encontrar erros mais facilmente. <br>
<br>
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!


A rastreabilidade também facilita a modificação do programa de animação depois que ela já está pronta. <br>
<br>
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!


É por isso que neste vídeo vamos explorar o Scripting em Python. 
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!


<br>

Quando iniciamos o Blender, temos esta janela com uma caixa de diálogo na qual é possível ver a versão do Blender. <br>
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!


Para fechar a caixa de diálogo basta clicar em qualquer ponto fora dela. <br>
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!


Isso permite ter acesso à janela de visualização 3D onde está presente este cubo que é o objeto que o Blender cria na inicialização do programa. 
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!


Entretanto, para o nosso vídeo de hoje não precisaremos desse cubo. Assim, é necessário apagá-lo. 
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!


Para apagar o cubo coloque o cursor na janela de visualização. Agora, se o cubo estiver selecionado, basta apertar delete no teclado.
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!


Quando você apertar delete, aparecerá um pequeno menu pedindo a confirmação de deleção. 
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!


Basta confirmar selecionando novamente "delete". 

!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!

 
Pronto! Agora já não temos mais objetos na janela de visualização e podemos iniciar a nossa animação. 
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!
!.!.!.!


Como nosso objetivo é programar em Python, vamos escolher o lay out de Scripting clicando aqui e selecionando a opção Scripting. 

Esta ação disponibilizará uma tela de edição para programação em "Python" do lado esquerdo da interface.

Para habilitar a edição nesta janela você precisa clicar em new, o que fará aparecer este cursor vermelho no canto superior esquerdo. 

Mas é importante prestar atenção no seguinte: você só consegue escrever na janela de edição se o cursor estiver positionado sobre ela. 

Então vamos experimentar colocando uma palavra qualquer como, por exemplo, TESTE.

As letras estão um pouco pequenas, então vamos aumentá-las segurando a tecla control e girando a rodinha do mouse. 

Tem um botão muito importante na tela de scripting que é o "Run Script". 

Se sua tela for pequena como a minha, este botão deve estar escondido. 

É preciso fazer ele aparecer aumentando a tela de Scripting.

Pronto! Agora já podemos acessar o botão "Run Script", o que permitirá executar o script em Python. 

Um erro será gerado se o botão "Run Script" for apertado neste momento porque, afinal, a palavra TESTE não é um comando do Python. 

Então vamos apagar a palavra TESTE para podermos começar a programar digitando os comandos corretos na janela de edição do Python.

Para acelerar o processo e o vídeo não ficar muito longo, eu já gravei alguns comandos no meu clipboard. 

Então não precisarei ficar digitando os comandos.

No seu caso, é preciso digitar os comandos, ok?

Para começar o programa é preciso importar algumas bibliotecas do Python. 

Esta bibliotecas dão acesso às principais classes do Blender.

Vamos importar duas bibliotecas: 

a Be Pe ipisilon que dá acesso às várias primitivas, tais como esferas, cubos e cilindros

e também a mathutils, que dá acesso a ferramentas de matemática, a exemplo dos vetores. 

Agora que importei essas duas bibliotecas, já é possível criar uma esfera, que é o ponto de partida para fazer nosso rato pinocchio. 

Utilizarei uma primitiva que se chama uv sphere.

Fácil assim, nosso primeiro programa em Python está pronto!

Agora basta apertar "Run Script" e ver o resultado na janela de visualização três de. 

Tá bom!

Eu sei que pareceu mágica!

Então vamos tentar analisar com mais cuidado para vermos que não há mágica nenhuma... 

Vamos analisar o comando de criação da esfera com detalhes. 

Para poder ver o comando completo, precisamos aumentar a janela. 

Tem um jeito fácil de fazer isso: aperte control e a seta para cima. 

Além disso, vamos usar a lupa para deixar as letras bem grandes. 

A primeira coisa que vemosi no comando é a classe be pe ipsilon.

Esta classe é a estrutura básica da biblioteca Blender Python.

Dentro da classe be pe ipisilon existe a classe ops, que contém os operadores que permitem lidar com as meshes do Blender, ou seja, com as malhas que definem as formas do Blender tais como esferas, toróides e cubos. 

Dentro da classe o pe esse temos a classe mesh, que por sua vez tem os elementos que permitem lidar com as formas tridimensionais propriamente ditas. 

Estas formas tridimensionais são também chamadas de primitivas, porque delas derivam muitas outras formas, mas não vamos tratar este aspecto aqui. 

Vamos focalizar então neste comando primitive uv sphere add, que é o responsável por criar a esfera, lembrando que add em inglês significa adiciona. 

Portanto, para que possamos chegar nesse comando, é preciso oferecer todo este caminho para o Python.

Para definir em que posição a esfera é criada, temos o parâmetro location igual a vector, que aparece dentro dos parênteses do comando de criação da primitiva. 

Vector em inglês significa vetor em português. 

Para quem não se lembra, um vetor é um conjunto de números ordenados. No caso do Blender são 3 números porque precisamos localizar os objetos em 3 dimensões. 

O primeiro número é sempre o X.

O segundo número é o Y.

E o terceiro número é o Z. 

Sabemos que Z é representado num eixo vertical, ao passo que X e Y são representados no plano horizontal. 

Então, dentro do parênteses do Vector você pode colocar os 3 números que indicam a posição inicial do centro da esfera que está sendo criada.

No caso da esfera que criamos, ela está posicionada no centro do espaço de visualização três D, ou seja, em zero zero zero.

Um outro parâmetro importante para a criação da esfera é o seu tamanho, representado pelo seu raio. Em inglês esse parâmetro recebe o nome de size. 

Vamos escolher o valor UM para o tamanho inicial da esfera, lembrando que este número tem unidades arbitrárias.

Vamos tirar a lupa para ver o comando completo novamente.

Olha só: o comando é bem fácil e você não precisa se preocupar em decorá-lo. Depois vamos ensinar uns truques para você não ter que decorar. 

Mas agora, vamos aumentar a janela do espaço de visualização 3 d apertando contro seta para cima na janela de edição, movendo o cursor para a janela de visualização e apertando control seta para cima novamente.

Pronto!

Já podemos ver nossa bela esfera, que é o ponto de partida para criar o ratinho pinocchio.

Acompanhe no próximo vídeo como vamos fazer os olhos, o nariz, as orelhas e a boca do ratinho. 

Muito obrigada e se você gostou, deixe um like.';

?>

























 
