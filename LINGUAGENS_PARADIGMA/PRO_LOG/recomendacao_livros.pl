% Base de dados de livros
livro('1984', ficcao, politica).
livro('Sapiens', historia, ciencia).
livro('O Pequeno Príncipe', autoajuda, reflexao).
livro('Dom Casmurro', literatura, classico).
livro('Senhor dos Anéis', fantasia, aventura).

% Recomendação de livros baseada no gênero e interesse
recomendar(Titulo, Genero, Interesse) :-
    livro(Titulo, Genero, Interesse).

% Interação com o usuário
recomendacao :-
    write('Informe seu gênero de interesse (ex: ficcao, historia, autoajuda): '),
    read_line_to_string(user_input, GeneroInput), % Lê a entrada como string
    atom_string(Genero, GeneroInput), % Converte para átomo
    write('Informe seu tópico de interesse (ex: politica, ciencia, reflexao): '),
    read_line_to_string(user_input, InteresseInput), % Lê o tópico de interesse
    atom_string(Interesse, InteresseInput), % Converte para átomo
    encontrar_livros(Genero, Interesse).

% Busca por livros
encontrar_livros(Genero, Interesse) :-
    (   recomendar(Titulo, Genero, Interesse) ->
        format('Livro recomendado: ~w~n', [Titulo]);
        write('Nenhum livro encontrado para os critérios informados.\n')
    ).
