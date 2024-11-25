% Base de treinos
treino(hipertrofia) :- objetivo(ganhar_massa), experiencia(intermediario).
treino(perda_de_peso) :- objetivo(emagrecer), disponibilidade(tempo_limitado).

% Interação com o usuário
recomendacao_treino :-
    write('Informe seu objetivo (ex: ganhar_massa, emagrecer): '),
    read(Objetivo),
    (   treino(Objetivo) -> format('Recomendação de treino: ~w', [Objetivo]);
        write('Nenhum treino encontrado para o objetivo especificado.')
    ).
