% Base de livros
livro('1984', ficcao, politica).
livro('Sapiens', historia, ciencia).
livro('Mindset', autoajuda, psicologia).

% Regras de recomendação
recomendar(Livro, Genero, Interesse) :- livro(Livro, Genero, Interesse).

% Interação com o usuário
recomendacao :-
    write('Informe seu gênero de interesse (ex: ficcao, historia, autoajuda): '),
    read(Genero),
    write('Informe seu tópico de interesse (ex: politica, ciencia, psicologia): '),
    read(Interesse),
    (   recomendar(Livro, Genero, Interesse)
    ->  format('Recomendamos o livro: ~w', [Livro])
    ;   write('Não encontramos livros correspondentes à sua preferência.')
    ).
