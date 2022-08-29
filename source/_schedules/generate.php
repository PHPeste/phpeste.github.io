<?php

require_once __DIR__ . '/../../vendor/autoload.php';
use Illuminate\Support\Str;

$entries = [
    ['2022-10-08 08:00', [2, 3], 'Como deixar sua aplicação PHP mais segura', 'palestra', ['Anne Caroline Rodrigues Pereira'], null, null, 'carol_rodrigues_p'],
    ['2022-10-08 08:00', [1], 'Vivendo através da ajuda da comunidade', 'palestra', ['PokémãoBR'], null, null, ''],
    ['2022-10-08 08:00', [6], 'Jogar wordle/letreco com PHP e Selenium', 'palestra', ['Thiago Dantas Soares'], null, null, 'dantas__thiago'],

    ['2022-10-08 09:00', [1, 2, 3, 4, 5, 6], 'Coffee break', 'span', ['PHPeste'], null, null, null],

    ['2022-10-08 10:00', [2, 3], 'Fazendo deploys pelo chat da sua live!', 'palestra', ['PokémãoBR'], null, null, null],
    ['2022-10-08 10:00', [4, 5], 'Devsquad', 'palestra', ['Devsquad'], null, null, null],

    ['2022-10-08 11:00', [2, 3], 'Implementando microsserviços com Kubernetes na prática', 'palestra', ['Vinícius Campitelli'], 'vcampitelli', null, null],
    ['2022-10-08 11:00', [6], 'Paradigmas de Programação: Uma Visão Geral sobre Orientação a Objetos e Programação Funcional', 'palestra', ['Marcel dos Santos'], null, null, null],

    ['2022-10-08 12:00', [6], 'Pausa para almoço', 'span', ['PHPeste'], null, null, null],

    ['2022-10-08 14:00', [1], 'Motivacional para iniciantes e aspirantes ao desenvolvimento com PHP', 'palestra', ['Emerson da Silva Martins'], null, 'https://www.linkedin.com/in/emerson-martins-87b231114', null],
    ['2022-10-08 14:00', [6], 'Os desafios de um Tech Leader para construir um time de sucesso', 'palestra', ['Luiz Claudio Siqueira Da Silva'], null, null, 'https://www.instagram.com/luizsiqueira.s/'],
    ['2022-10-08 14:00', [2, 3], 'Escalabilidade de uma aplicação: Principais desafios, como escalar e importância', 'palestra', ['Daniel Rodrigues'], null, 'https://www.linkedin.com/in/eusouodaniel', null],

    ['2022-10-08 15:00', [4, 5], 'Melhore como profissional indo além do técnico', 'round-table', ['Vinícius Campitelli'], 'vcampitelli', null, null],

    ['2022-10-08 16:00', [1], 'Pausa para o lanche', 'span', ['PHPeste'], null, null, null],

    ['2022-10-08 16:30', [1], 'Circuit Breaker: O que é isso?', 'palestra', ['Daniel Rodrigues'], null, 'https://www.linkedin.com/in/eusouodaniel', null],
    ['2022-10-08 16:30', [6], 'O diploma morreu?', 'palestra', ['Emmanuelle Richard'], null, null, 'https://www.instagram.com/manu_richard/'],
    ['2022-10-08 16:30', [2, 3], 'O Que Há de Novo no PHP 8.0 e 8.1?', 'palestra', ['Marcel dos Santos'], null, null, null],

    ['2022-10-08 17:30', [1], 'Encerramento', 'span', ['PHPeste'], null, null, null],

    ['2022-10-09 08:00', [6], 'Do XGH Ao Scrum', 'palestra', ['Davidson Marques de Medeiros'], 'davidsonMarques', null, 'davidsonmarquesm'],
    ['2022-10-09 08:00', [1], 'Laravel Clean Code, Táticas', 'palestra', ['Jilcimar da Silva Fernandes', 'Paulo Victor de Azevedo Guerra'], null, null, null],
    ['2022-10-09 08:00', [2, 3], 'Padrões de Microserviços', 'palestra', ['Rafael Neris'], null, null, null],

    ['2022-10-09 09:00', [2, 3], 'Como proteger o seu legado', 'palestra', ['Nickolas Da Silva'], 'nawarian', 'nawarian', null],
    ['2022-10-09 09:00', [6], 'Debugando queries com Visual Explain', 'palestra', ['Leandro Pedrosa'], 'https://twitter.com/pedrosalpr', null, 'https://www.instagram.com/pedrosalpr'],

    ['2022-10-09 10:00', [1], 'Coffee break', 'span', ['PHPeste'], null, null, null],

    ['2022-10-09 11:00', [6], 'Introdução ao TDD', 'palestra', ['Sávio Henrique Silva Araújo'], 'Savioosilvaa', null, null],
    ['2022-10-09 11:00', [2, 3], 'Não deixe o framework atrasar suas entregas', 'palestra', ['Alessandro Feitoza'], 'https://twitter.com/feitozaAle', null, 'https://www.instagram.com/alessandro_feitoza'],
    ['2022-10-09 11:00', [1], 'O bê-a-bá da arquitetura de software!', 'palestra', ['Marcel dos Santos'], null, null, null],

    ['2022-10-09 12:00', [1], 'Pausa para almoço', 'span', ['PHPeste'], null, null, null],

    ['2022-10-09 14:00', [2, 3], 'PHP para Single Page Applications, pode?!', 'palestra', ['William Correa'], null, null, null],
    ['2022-10-09 14:00', [1], 'O manual do PHP como um instrumento de inclusão social', 'palestra', ['Daniel Rodrigues Lima'], 'https://twitter.com/geekcom2', null, 'https://www.instagram.com/geekcomdev'],

    ['2022-10-09 15:00', [4, 5], 'Comunidades PHP e a Inclusão Digital', 'round-table', ['Alessandro Feitoza'], 'https://twitter.com/feitozaAle', null, 'https://www.instagram.com/alessandro_feitoza'],

    ['2022-10-09 16:00', [1], 'Pausa pro lanche', 'span', ['PHPeste'], null, null, null],
    ['2022-10-09 16:30', [4, 5], 'Encerramento', 'span', ['PHPeste'], null, null, null],
];

foreach ($entries as $entry) {
    [$time, $rooms, $title, $type, $speakers, $twitter, $linkedin, $instagram] = $entry;

    $time = new DateTime($time);
    $file = $time->format('\d\i\a-d_H-i') . '-' . Str::slug($title) . '.md';
    $speakersStr = implode("\n  - ", $speakers);
    $roomsStr = implode("\n  - ", $rooms);
    $image = Str::slug(implode('-e-', $speakers));

    $markdown = <<<MD
    ---
    title: '{$title}'
    type: {$type}
    speakers:
      - {$speakersStr}
    picture: /assets/images/schedule/{$image}.jpg
    linkedin: {$linkedin}
    twitter: {$twitter}
    instagram: {$instagram}
    date: '{$time->format("Y-m-d H:i")}'
    rooms:
      - {$roomsStr}
    ---
    MD;
    file_put_contents($file, $markdown);
}

