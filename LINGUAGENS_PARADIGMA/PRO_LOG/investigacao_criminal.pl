% Base de evidências e teorias
suspeito(jose) :- impressao_digital(lugar_crime), motivo(financeiro).
teoria(crime_passional) :- testemunha(visto_discutindo), relacao(intima).

% Interação com o usuário
investigacao :-
    write('Informe evidências (ex: impressao_digital(lugar_crime), testemunha(visto_discutindo)): '),
    read(Evidencia),
    assertz(Evidencia), % Adiciona a evidência fornecida pelo usuário à base de fatos
    (   suspeito(Suspeito) -> format('Suspeito identificado: ~w', [Suspeito])
    ;   teoria(Teoria) -> format('Teoria sugerida: ~w', [Teoria])
    ;   write('Nenhuma correspondência encontrada. Considere revisar as evidências.')
    ),
    retract(Evidencia). % Remove a evidência fornecida após a análise
