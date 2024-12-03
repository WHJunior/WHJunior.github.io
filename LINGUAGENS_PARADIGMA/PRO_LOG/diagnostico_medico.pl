% Base de fatos para sintomas
sintoma(febre).
sintoma(tosse).
sintoma(dor_de_cabeca).
sintoma(dor_de_garganta).
sintoma(dor_muscular).
sintoma(cansaco).
sintoma(nauseas).

% Regras para diagnósticos
doenca(gripe, Sintomas) :-
    member(febre, Sintomas),
    member(tosse, Sintomas),
    member(cansaco, Sintomas).

doenca(infeccao_viral, Sintomas) :-
    member(febre, Sintomas),
    member(dor_de_garganta, Sintomas),
    member(dor_muscular, Sintomas).

doenca(enxaqueca, Sintomas) :-
    member(dor_de_cabeca, Sintomas),
    member(nauseas, Sintomas).

% Interação com o usuário
diagnostico :-
    write('Informe os sintomas separados por vírgula (ex: febre,tosse): '),
    read_line_to_string(user_input, Input), % Lê a entrada do usuário como uma string
    split_string(Input, ",", " ", SintomasStrList), % Divide a string pelos delimitadores de vírgula
    maplist(atom_string, SintomasList, SintomasStrList), % Converte strings para átomos
    diagnosticar(SintomasList).

% Processo de diagnóstico
diagnosticar(Sintomas) :-
    (   doenca(Doenca, Sintomas) ->
        format('Possível diagnóstico: ~w~n', [Doenca]);
        write('Recomendação: Consulte um médico para avaliação.~n')
    ).
