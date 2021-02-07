<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfils')->insert([
            'nome' => "Jenifer Cassandra da Silva Oliveira",
            'profile_picture' => 'uploads/1603676880121.jpeg',
            'sobre' => 'Acadêmica do curso de Licenciatura em Matemática pelo IFRS-Campus Osório. Já atuou em projetos de extensão como estudante voluntária na área do Ensino de Matemática (2017 e 2019), e foi bolsista (CAPES) no PIBID- Subprojeto de Matemática entre 2018 e 2020. Também já participou de projetos de pesquisa na área do Ensino de Matemática, subárea ensino e aprendizagem de Matemática; e Matemática Aplicada, subárea Equações diferenciais e aplicações. (Texto informado pelo autor)',
            'instituicao_de_vinculo' => 'Instituto Federal do Rio Grande do Sul Campus Osório',
            'lattes' => 'http://lattes.cnpq.br/2676724425968035',
            'slug' => 'jenifer-cassandra-da-silva-oliveira'
        ]);
        DB::table('perfils')->insert([
            'nome' => "Aline Silva de Bona",
            'profile_picture' => 'uploads/alinebona.gif',
            'sobre' => 'Em 1996, como primeira opção de vestibular: ingressa na UFRGS para ser "professora de matemática". Desde 1997 dedica-se ao Ensino de Matemática, possui graduação em Licenciatura Plena em Matemática pela UFRGS (1999) e Bacharelado em Ciências Contábeis pela FAPA (2008), sendo a mesma uma aplicação da matemática à ciência social. Professora nomeada de matemática do Ensino Fundamental e Médio/Profissional do Colégio Estadual Ruben Berta por mais de 10 anos, e em constante formação continuada e em busca de novos desafios sempre. Em 2010 foi um ano de muitos concursos públicos e novas aprendizagens EAD, em busca de uma matemática para todos! Atualmente professora do IFRS - Campus de Osório, que estou adorando! Defendi minha dissertação sobre os Portfólio de Matemática em 6/12/2010, e no segundo ano do doutorado em Informática na Educação, na UFRGS/PPGIE, com um estudo sobre "Espaço de Aprendizagem Digital da Matemática: o aprender a aprender por cooperação, sob a orientação da Prof. Léa Fagundes e coorientação do Prof. Marcus Basso, qualifico a pesquisa em 17 de abril de 2012, e defendo a minha tese dia 22 de novembro de 2012, aprovada e homologada em 26 de novembro de 2012, pela Banca: Prof. Cleci Maraschin, Elisabeth Búrigo e Lúcia Giraffa. Só Alegria. Além disso, finalizei um curso de especialização EAD para aprender como o estudante sente-se nessa modalidade de curso, além de aprender mais sobre metacognição, pois já atuei como tutora da distância de curso de especialização em Matemática, Mídias Digitais para educação básica, então viso aprender também vivenciando a experiência! Pós-Doutora pela Universidade de São Paulo (USP), em 2013, no Instituto de Psicologia - Departamento Psicologia da Aprendizagem, Desenvolvimento e Personalidade, com a supervisão da professora Maria Thereza Costa Coelho de Souza. Nesta pesquisa estudo a aprendizagem de Matemática sob o olhar de Piaget. MÃE da Eduarda em 29/03/2014, do Igor em 28/01/2017, e da Alice em 06/09/2018. Todas gestações completas e com amamentação de no mínimo até 1 ano de idade. E sempre trabalhando e estudando! ',
            'instituicao_de_vinculo' => 'Instituto Federal do Rio Grande do Sul Campus Osório',
            'lattes' => 'http://lattes.cnpq.br/0264896077247150',
            'slug' => 'aline-silva-de-bona'
        ]);
        DB::table('perfils')->insert([
            'nome' => "William Moraes",
            'profile_picture' => 'uploads/william.jpg',
            'sobre' => '',
            'instituicao_de_vinculo' => 'Instituto Federal do Rio Grande do Sul Campus Canoas',
            'lattes' => 'http://lattes.cnpq.br/',
            'slug' => 'william-moraes'
        ]);
        DB::table('perfils')->insert([
            'nome' => "Bruno Ferreira da Luz",
            'profile_picture' => 'uploads/bruno.jpg',
            'sobre' => '',
            'instituicao_de_vinculo' => 'Instituto Federal do Rio Grande do Sul Campus Osório',
            'lattes' => 'http://lattes.cnpq.br/',
            'slug' => 'bruno-ferreira-da-luz'
        ]);
        DB::table('projetos')->insert([
            'nome' => "Provas De Matemática Básica Alternativas E Investigativas",
            'image' => 'uploads/capa_1.jpeg',
            'descricao' => '<p><strong>Sejam todos muito bem vindos!</strong></p><p>Esperamos que esse seja um espa&ccedil;o de muita aprendizagem e trocas de experi&ecirc;ncias.</p><p>Abaixo seguem&nbsp;<em>orienta&ccedil;&otilde;es</em>&nbsp;<em>gerais</em>&nbsp;sobre o curso:</p><ul><li>O curso ser&aacute; dividido em tr&ecirc;s m&oacute;dulos principais;</li><li>O primeiro m&oacute;dulo, "Introdu&ccedil;&atilde;o e reflex&atilde;o sobre demonstra&ccedil;&otilde;es matem&aacute;ticas", tem o intuito de iniciar o estudo de demonstra&ccedil;&otilde;es, bem como discutir a relev&acirc;ncia das demonstra&ccedil;&otilde;es, refletir sobre o que significa demonstrar em matem&aacute;tica,&nbsp;e o que os documentos que norteiam a educa&ccedil;&atilde;o b&aacute;sica brasileira orientam sobre a inclus&atilde;o das demonstra&ccedil;&otilde;es nesses n&iacute;veis de ensino;</li><li>O segundo m&oacute;dulo, "Introdu&ccedil;&atilde;o as t&eacute;cnicas de demonstra&ccedil;&otilde;es", tem o intuito de iniciar o estudo dos tipos de demonstra&ccedil;&otilde;es, sendo que o enfoque ser&aacute; dado &agrave;s demonstra&ccedil;&otilde;es diretas;</li><li>E o terceiro e &uacute;ltimo m&oacute;dulo, "Continuando o estudo sobre os tipos de demonstra&ccedil;&otilde;es", tem o intuito de dar continuidade ao estudo das t&eacute;cnicas de demonstra&ccedil;&atilde;o. Sendo que nesse m&oacute;dulo ser&aacute; abordado a t&eacute;cnica redu&ccedil;&atilde;o ao absurdo;</li><li>Nos tr&ecirc;s m&oacute;dulos h&aacute; etapas te&oacute;ricas e pr&aacute;ticas, isso porque elaboramos textos, resumos, v&iacute;deos, selecionamos materiais de terceiros, planejamos tarefas que voc&ecirc;s dever&atilde;o nos enviar... enfim, tudo planejado para que possamos aprender ao m&aacute;ximo juntos;</li><li>Abaixo de cada tarefa h&aacute; um f&oacute;rum. Nesses f&oacute;runs voc&ecirc;s poder&atilde;o interagir, tirar d&uacute;vidas, acrescentar reflex&otilde;es sobre as atividades, e etc. Embora os f&oacute;runs n&atilde;o sejam avaliativos, sempre que surgir uma d&uacute;vida voc&ecirc; pode e deve nos contatar atrav&eacute;s dos f&oacute;runs;</li><li>Os hor&aacute;rios que os tutores estar&atilde;o respondendo os f&oacute;runs ser&atilde;o:</li></ul><ol><li>Dia 5/10: das 16:00 horas as 17:00 horas;</li><li>Dia 5/10: das 21:30 horas as 22:30 horas;</li><li>Dia 6/10:&nbsp; das 16:00 horas as 17:00 horas;</li><li>Dia 6/10: das 21:30 horas as 22:30 horas;</li><li>Dia 7/10:&nbsp; das 14:00 horas as 15:00 horas;</li><li>Dia 7/10: das 20:00 horas as 21:00 horas.</li><li>Eu, Aline, estarei online todos os dias das 8h at&eacute; as 10h e das 13h30 at&eacute; as 18h30. Se ocorrer necessidade de d&uacute;vidas fora destes hor&aacute;rios registre no f&oacute;rum ou por mensagem que no dia seguinte retornaremos.ok?</li></ol><ul><li>Para receber certifica&ccedil;&atilde;o, os cursistas dever&atilde;o responder todos os questionamentos, enviar&nbsp;<strong>todas</strong>&nbsp;as tarefas e responder ao teste de conhecimentos proposto no final do terceiro m&oacute;dulo. Sendo que no teste de conhecimentos s&atilde;o permitidas duas tentativas de respostas e &eacute; necess&aacute;rio ter aproveitamento de<strong>&nbsp;pelo menos 60% das quest&otilde;es</strong>&nbsp;em uma das tentativas;</li><li>&nbsp;Ficou com alguma d&uacute;vida sobre o curso? Deixe-a aqui abaixo no nosso f&oacute;rum de d&uacute;vidas gerais sobre&nbsp; curso, que iremos respond&ecirc;-la o mais breve poss&iacute;vel!</li></ul><p>Sem mais delongas, bons estudos!&nbsp;</p>',
            'status' => 'concluido',
            'visibiliade' => 'visivel',
            'visualizacoes' => 0,
            'slug' => 'provas-de-matematica-basica-alternativas-e-investigativas'
        ]);
        DB::table('projeto_colaboradores')->insert([
            'tipo' => "bolsista",
            'projeto_id' => 1,
            'perfil_id' => 1,
        ]);
        DB::table('projeto_colaboradores')->insert([
            'tipo' => "bolsista",
            'projeto_id' => 1,
            'perfil_id' => 2,
        ]);
        DB::table('projeto_categorias')->insert([
            'titulo' => "Ensino",
            'projeto_id' => 1,
        ]);
        DB::table('projeto_modulos')->insert([
            'projeto_id' => 1,
            'titulo' => "Introdução e reflexão sobre demonstrações matemáticas",
            'descricao' => ''
        ]);
        DB::table('modulo_arquivos')->insert([
            'projeto_modulo_id' => 1,
            'titulo' => "Exemplo conjectura",
            'storage' => "local",
            'source' => "uploads/Exemplo_conjectura.pdf",
        ]);
        DB::table('projeto_modulos')->insert([
            'projeto_id' => 1,
            'titulo' => "Introdução as técnicas de demonstrações",
            'descricao' => ''
        ]);
        DB::table('modulo_arquivos')->insert([
            'projeto_modulo_id' => 2,
            'titulo' => "Material do Vídeo 1- Iniciando o estudo das demonstrações diretas",
            'storage' => "local",
            'source' => "uploads/Material_Vídeo 1.pdf",
        ]);
        DB::table('projeto_modulos')->insert([
            'projeto_id' => 1,
            'titulo' => "Continuando o estudo sobre os tipos de demonstrações",
            'descricao' => ''
        ]);
        DB::table('modulo_arquivos')->insert([
            'projeto_modulo_id' => 3,
            'titulo' => "DEMONSTRAÇÕES POR REDUÇÃO AO ABSURDO NO VOLUME I DO ELEMENTOS DE EUCLIDES",
            'storage' => "local",
            'source' => "uploads/atividade_hist_etc_func.pdf",
        ]);
    }
}
