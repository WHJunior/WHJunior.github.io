% Base de dados de evidências e testemunhos
evidencia(impressao_digital).
evidencia(motivo_financeiro).
evidencia(testemunha_ocular).

% Base de suspeitos
suspeito(jose) :- evidencias([impressao_digital, motivo_financeiro]).
suspeito(maria) :- evidencias([testemunha_ocular, motivo_passional]).

% Base de teorias
teoria(crime_passional) :- evidencias([testemunha_ocular, motivo_passional]).
teoria(crime_furtivo) :- evidencias([motivo_financeiro, impressao_digital]).

% Função auxiliar para verificar se as evidências fornecidas estão presentes
evidencias(Evidencias) :-
    forall(member(E, Evidencias), evidencia(E)).

% Interação com o usuário
analisar_crime :-
    write('Informe as evidências encontradas (ex: impressao_digital,motivo_financeiro): '),
    read_line_to_string(user_input, EvidenciasInput), % Lê a entrada como string
    split_string(EvidenciasInput, ",", " ", EvidenciasStrList), % Divide por vírgula
    maplist(atom_string, Evidencias, EvidenciasStrList), % Converte para átomos
    analisar(Evidencias).

% Análise do caso com base nas evidências
analisar(Evidencias) :-
    (   (   member(impressao_digital, Evidencias), member(motivo_financeiro, Evidencias), suspeito(jose) ->
                format('Suspeito: ~w\nTeoria: crime_furtivo~n', [jose]);
        member(testemunha_ocular, Evidencias), member(motivo_passional, Evidencias), suspeito(maria) ->
                format('Suspeito: ~w\nTeoria: crime_passional~n', [maria])
        );
        write('Nenhum suspeito encontrado com as evidências fornecidas.\n')
    ).
