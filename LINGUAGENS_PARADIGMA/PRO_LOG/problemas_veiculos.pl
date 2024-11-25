% Fatos de problemas
problema(motor_nao_liga).
problema(barulho_ao_frear).
problema(vazamento_oleo).

% Regras de diagnóstico de veículos
diagnostico(bateria_fraca) :- motor_nao_liga, luzes_fracas.
diagnostico(freio_desgastado) :- barulho_ao_frear, pedal_freio_macio.
diagnostico(vazamento_oleo_motor) :- vazamento_oleo, cheiro_oleo.

% Interação com o usuário
diagnostico_veiculo :-
    write('Informe o problema no veículo (ex: motor_nao_liga, barulho_ao_frear): '),
    read(Input),
    atom_string(Input, ProblemasStr),
    split_string(ProblemasStr, ", ", "", ProblemasList),
    diagnosticar_problema(ProblemasList).

diagnosticar_problema(Problemas) :-
    (   member(motor_nao_liga, Problemas) -> write('Recomendação: Verifique a bateria.');
        member(barulho_ao_frear, Problemas) -> write('Recomendação: Verifique o sistema de freios.');
        write('Recomendação: Consulte um mecânico para uma análise detalhada.')
    ).
