% Fatos de sintomas
sintoma(febre).
sintoma(dor_de_cabeca).
sintoma(tosse).
sintoma(dor_de_garganta).
sintoma(dor_muscular).

% Regras de diagnóstico
doenca(gripe) :- febre, tosse, cansaco.
doenca(infeccao_viral) :- febre, dor_de_garganta, dor_muscular.
doenca(enxaqueca) :- dor_de_cabeca, nauseas.

% Interação com o usuário
diagnostico :-
    write('Informe os sintomas separados por vírgula (ex: febre, tosse): '),
    read(Input),
    atom_string(Input, SintomasStr),
    split_string(SintomasStr, ", ", "", SintomasList),
    diagnosticar(SintomasList).

diagnosticar(Sintomas) :-
    (   member(febre, Sintomas), member(tosse, Sintomas) -> write('Possível diagnóstico: Gripe');
        member(febre, Sintomas), member(dor_de_garganta, Sintomas) -> write('Possível diagnóstico: Infecção Viral');
        write('Recomendação: Consulte um médico para avaliação.')
    ).
