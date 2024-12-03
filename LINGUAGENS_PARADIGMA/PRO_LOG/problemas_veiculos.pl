% Base de fatos para sintomas de veículos
sintoma_veiculo(motor_nao_liga).
sintoma_veiculo(luzes_fracas).
sintoma_veiculo(barulho_ao_frear).
sintoma_veiculo(pedal_macio).
sintoma_veiculo(mancha_no_chao).
sintoma_veiculo(cheiro_de_gasolina).

% Regras para diagnósticos de problemas
problema(bateria_fraca, Sintomas) :-
    member(motor_nao_liga, Sintomas),
    member(luzes_fracas, Sintomas).

problema(freio_desgastado, Sintomas) :-
    member(barulho_ao_frear, Sintomas),
    member(pedal_macio, Sintomas).

problema(vazamento_de_oleo, Sintomas) :-
    member(mancha_no_chao, Sintomas).

problema(vazamento_de_combustivel, Sintomas) :-
    member(cheiro_de_gasolina, Sintomas).

% Interação com o usuário
diagnostico_veiculo :-
    write('Descreva os sintomas do veículo separados por vírgula (ex: motor_nao_liga,luzes_fracas): '),
    read_line_to_string(user_input, Input), % Lê a entrada do usuário
    split_string(Input, ",", " ", SintomasStrList), % Divide os sintomas por vírgula
    maplist(atom_string, SintomasList, SintomasStrList), % Converte strings para átomos
    diagnosticar_veiculo(SintomasList).

% Processo de diagnóstico
diagnosticar_veiculo(Sintomas) :-
    (   problema(Problema, Sintomas) ->
        format('Possível problema: ~w~n', [Problema]),
        recomendacao(Problema);
        write('Não foi possível identificar o problema. Recomendação: Consulte um mecânico especializado.\n')
    ).

% Recomendação de ações com base no problema
recomendacao(bateria_fraca) :-
    write('Recomendação: Verifique a bateria do veículo e considere substituí-la caso esteja descarregada.\n').

recomendacao(freio_desgastado) :-
    write('Recomendação: Leve o veículo para revisão do sistema de freios o mais rápido possível.\n').

recomendacao(vazamento_de_oleo) :-
    write('Recomendação: Verifique o nível de óleo e procure por vazamentos visíveis no motor.\n').

recomendacao(vazamento_de_combustivel) :-
    write('Recomendação: Verifique o tanque de combustível e as conexões para evitar riscos de incêndio.\n').
