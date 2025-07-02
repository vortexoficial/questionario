const blocos = {
            cerebro: {
                titulo: '🧠 CÉREBRO – Liderança, Direção e Planejamento',
                perguntas: [
                    {
                        texto: '1 - Você sente que está no controle da empresa?',
                        respostas: [
                            'Sim, conduzo com clareza e confiança',
                            'Às vezes sinto controle, às vezes me perco',
                            'Não, me sinto engolida pela rotina e apagando incêndios'
                        ]
                    },
                    {
                        texto: '2 - Você planeja sua semana com base em prioridades?',
                        respostas: [
                            'Sim, tenho uma rotina clara de planejamento',
                            'Planejo às vezes, quando sobra tempo',
                            'Não, resolvo tudo no improviso'
                        ]
                    },
                    {
                        texto: '3 - Você evita decisões por medo ou insegurança?',
                        respostas: [
                            'Não, tomo decisões com firmeza',
                            'Às vezes adio ou peço ajuda',
                            'Sim, costumo travar ou fugir de decisões difíceis'
                        ]
                    },
                    {
                        texto: '4 - Você tem clareza sobre onde quer chegar em 3 anos?',
                        respostas: [
                            'Sim, tenho metas e visão clara do futuro',
                            'Tenho uma ideia, mas não está clara ou organizada',
                            'Não, estou vivendo um dia de cada vez'
                        ]
                    },
                    {
                        texto: '5 - Você revisa suas metas com frequência?',
                        respostas: [
                            'Sim, acompanho e ajusto regularmente',
                            'Faço isso esporadicamente',
                            'Não, deixo isso de lado'
                        ]
                    },
                    {
                        texto: '6 - Você analisa vendas, custos e desempenho com regularidade?',
                        respostas: [
                            'Sim, acompanho os dados toda semana ou mês',
                            'Às vezes olho, mas sem consistência',
                            'Não, me baseio em sensação e urgência'
                        ]
                    },
                    {
                        texto: '7 - Existe um plano estruturado de crescimento?',
                        respostas: [
                            'Sim, com metas, prazos e ações definidas',
                            'Tenho vontade de crescer, mas sem estrutura',
                            'Não, cresço conforme aparece oportunidade'
                        ]
                    },
                    {
                        texto: '8 - Sua atuação é mais estratégica do que operacional?',
                        respostas: [
                            'Sim, foco na liderança e crescimento',
                            'Divido entre liderar e operar',
                            'Não, estou 100% na operação'
                        ]
                    },
                    {
                        texto: '9 - Você decide com agilidade e confiança?',
                        respostas: [
                            'Sim, com firmeza e autonomia',
                            'Às vezes me sinto insegura ou peço opiniões',
                            'Não, procrastino decisões importantes'
                        ]
                    },
                    {
                        texto: '10 - Sua empresa funcionaria bem sem você por 15 dias?',
                        respostas: [
                            'Sim, tudo está bem organizado e com responsáveis claros',
                            'Funcionaria com pequenos ajustes ou suporte',
                            'Não, tudo depende de mim'
                        ]
                    },
                    {
                        texto: '11 - Sua empresa monitora regularmente a atuação dos concorrentes e o mercado?',
                        respostas: [
                            'Sim, com análises e ações definidas',
                            'Às vezes, de forma informal',
                            'Não, não monitora'
                        ]
                    },
                    {
                        texto: '12 - Existe uma estratégia clara para posicionamento e diferenciação no mercado?',
                        respostas: [
                            'Sim, bem definida e aplicada',
                            'Parcialmente, mas sem consistência',
                            'Não existe'
                        ]
                    },
                    {
                        texto: '13 - A empresa possui cultura de inovação e melhoria contínua?',
                        respostas: [
                            'Sim, é um valor presente e praticado',
                            'Às vezes, dependendo do momento',
                            'Não, resistimos a mudanças'
                        ]
                    },
                    {
                        texto: '14 - A empresa se adapta rapidamente às mudanças do mercado?',
                        respostas: [
                            'Sim, com agilidade e planejamento',
                            'Às vezes, mas demora para reagir',
                            'Não, fica estagnada'
                        ]
                    }
                ]
            },
            coracao: {
                titulo: '❤️ CORAÇÃO – Equipe, Clima e Cultura',
                perguntas: [
                    {
                        texto: '15 - Sua equipe está alinhada com seus valores?',
                        respostas: [
                            'Sim, todos conhecem e praticam os valores do negócio',
                            'Alguns sim, outros nem tanto',
                            'Não, sinto desalinhamento ou falta de conexão'
                        ]
                    },
                    {
                        texto: '16 - Existe confiança entre você e a equipe?',
                        respostas: [
                            'Sim, há abertura, respeito e colaboração',
                            'Às vezes sim, às vezes percebo distância',
                            'Não, sinto barreiras, insegurança ou ruídos'
                        ]
                    },
                    {
                        texto: '17 - Você lida bem com erros e conflitos?',
                        respostas: [
                            'Sim, com diálogo e aprendizado',
                            'Às vezes me desestabilizo ou adio conversas difíceis',
                            'Não, evito ou reajo mal'
                        ]
                    },
                    {
                        texto: '18 - Você se sente seguro(a) para repor talentos quando necessário?',
                        respostas: [
                            'Sim, tenho opções e plano para isso',
                            'Depende da situação',
                            'Não, me sinto travada ou com medo de perder'
                        ]
                    },
                    {
                        texto: '19 - Você já evitou desligar alguém por insegurança?',
                        respostas: [
                            'Não, lido com isso quando necessário',
                            'Às vezes adio para evitar conflitos',
                            'Sim, mantenho pessoas mesmo sem resultado'
                        ]
                    },
                    {
                        texto: '20 - Sua equipe sabe o que se espera dela?',
                        respostas: [
                            'Sim, cada um tem clareza de seu papel e entregas',
                            'Mais ou menos, algumas funções ainda são vagas',
                            'Não, percebo confusão ou falta de direção'
                        ]
                    },
                    {
                        texto: '21 - Existe protagonismo na equipe?',
                        respostas: [
                            'Sim, todos se responsabilizam e tomam iniciativa',
                            'Alguns sim, outros esperam ordens',
                            'Não, todos dependem de mim'
                        ]
                    },
                    {
                        texto: '22 - Sua equipe age com autonomia?',
                        respostas: [
                            'Sim, resolvem bem sem depender de mim',
                            'Em partes, mas ainda me procuram demais',
                            'Não, tudo passa por mim'
                        ]
                    },
                    {
                        texto: '23 - Você conversa sobre desempenho com frequência?',
                        respostas: [
                            'Sim, dou feedbacks e acompanho resultados',
                            'Faço isso às vezes, sem rotina definida',
                            'Não, evito por falta de tempo ou preparo'
                        ]
                    },
                    {
                        texto: '24 - Você se sente reconhecida pela equipe?',
                        respostas: [
                            'Sim, sinto valorização e respeito',
                            'Às vezes, mas gostaria de mais',
                            'Não, me sinto sozinha e desvalorizada'
                        ]
                    },
                    {
                        texto: '25 - Sua empresa promove o desenvolvimento contínuo dos colaboradores?',
                        respostas: [
                            'Sim, com treinamentos e oportunidades constantes',
                            'Algumas ações, mas pouco frequentes',
                            'Não, não há foco nisso'
                        ]
                    },
                    {
                        texto: '26 - Existe um programa ou ação para reconhecer e valorizar os colaboradores?',
                        respostas: [
                            'Sim, com frequência e diversidade',
                            'Às vezes, de forma pontual',
                            'Não, não valorizamos formalmente'
                        ]
                    },
                    {
                        texto: '27 - A empresa possui ações relacionadas à responsabilidade social ou sustentabilidade?',
                        respostas: [
                            'Sim, com iniciativas consistentes',
                            'Pouco, em raras ocasiões',
                            'Não, não temos essas práticas'
                        ]
                    }
                ]
            },
            pulmao: {
                titulo: '💨 PULMÃO – Finanças, Sustentação e Lucratividade',
                perguntas: [
                    {
                        texto: '28 - Você sabe o lucro mensal da empresa?',
                        respostas: [
                            'Sim, com clareza e controle',
                            'Tenho uma noção, mas sem precisão',
                            'Não faço ideia'
                        ]
                    },
                    {
                        texto: '29 - O financeiro da empresa não afeta sua vida pessoal?',
                        respostas: [
                            'São totalmente separados',
                            'Às vezes se misturam',
                            'Afeta diretamente minha vida pessoal'
                        ]
                    },
                    {
                        texto: '30 - O faturamento é proporcional ao esforço da equipe?',
                        respostas: [
                            'Sim, vejo retorno justo',
                            'Em partes, poderia ser melhor',
                            'Não, trabalhamos muito e ganhamos pouco'
                        ]
                    },
                    {
                        texto: '31 - Você consegue investir sem medo de faltar dinheiro?',
                        respostas: [
                            'Sim, com planejamento',
                            'Faço com cautela e receio',
                            'Não, deixo de inovar por medo'
                        ]
                    },
                    {
                        texto: '32 - Os pagamentos estão sempre em dia?',
                        respostas: [
                            'Sim, tudo sob controle',
                            'Às vezes atrasam',
                            'Não, sempre há atrasos ou imprevistos'
                        ]
                    },
                    {
                        texto: '33 - Você separa gastos pessoais dos da empresa?',
                        respostas: [
                            'Sim, com disciplina',
                            'Às vezes misturo',
                            'Não, uso tudo junto'
                        ]
                    },
                    {
                        texto: '34 - Seus preços são definidos com base em cálculo e estratégia?',
                        respostas: [
                            'Sim, com base real de custos e mercado',
                            'Mais ou menos, com base na concorrência',
                            'Não, no “achismo” ou por comparação'
                        ]
                    },
                    {
                        texto: '35 - Você faz retiradas fixas da empresa?',
                        respostas: [
                            'Sim, tenho um pró-labore definido',
                            'Retiro conforme sobra',
                            'Não faço retirada certa'
                        ]
                    },
                    {
                        texto: '36 - Você paga fornecedores e equipe com tranquilidade?',
                        respostas: [
                            'Sim, sempre',
                            'Às vezes fico no limite',
                            'Não, já atrasei ou deixei de pagar'
                        ]
                    },
                    {
                        texto: '37 - Você se sente financeiramente segura com o futuro da empresa?',
                        respostas: [
                            'Sim, com reservas e previsibilidade',
                            'Tenho dúvidas e receios',
                            'Não, me sinto vulnerável'
                        ]
                    },
                    {
                        texto: '38 - Sua empresa possui controle e plano para gestão de riscos financeiros?',
                        respostas: [
                            'Sim, com ferramentas e ações definidas',
                            'Parcialmente, mas pouco estruturado',
                            'Não, não existe controle formal'
                        ]
                    },
                    {
                        texto: '39 - Vocês têm políticas claras para compliance e governança financeira?',
                        respostas: [
                            'Sim, seguidas rigorosamente',
                            'Pouco definidas, mas tentamos seguir',
                            'Não, não temos políticas formais'
                        ]
                    }
                ]
            },
            sangue: {
                titulo: '🩸 SANGUE – Processos, Comunicação e Sistema',
                perguntas: [
                    {
                        texto: '40 - A experiência do cliente é padronizada?',
                        respostas: [
                            'Sim, independente de quem atende',
                            'Em parte, varia entre os atendentes',
                            'Não, cada um faz de um jeito'
                        ]
                    },
                    {
                        texto: '41 - A equipe segue processos claros?',
                        respostas: [
                            'Sim, temos padrão definido',
                            'Às vezes, com falhas',
                            'Não, cada um faz do seu jeito'
                        ]
                    },
                    {
                        texto: '42 - Existem registros de estoque e atendimentos?',
                        respostas: [
                            'Sim, tudo controlado',
                            'Algumas coisas sim, outras não',
                            'Não, nada é registrado'
                        ]
                    },
                    {
                        texto: '43 - A comunicação entre setores é fluida?',
                        respostas: [
                            'Sim, clara e objetiva',
                            'Às vezes há ruídos',
                            'Não, gera retrabalho e confusão'
                        ]
                    },
                    {
                        texto: '44 - Sua equipe sabe quais são as metas e objetivos da empresa?',
                        respostas: [
                            'Sim, todos têm clareza e são lembrados com frequência',
                            'Sabem superficialmente ou às vezes esquecem',
                            'Não, metas não são comunicadas'
                        ]
                    },
                    {
                        texto: '45 - Você lida bem com imprevistos e urgências?',
                        respostas: [
                            'Sim, consigo manter o controle',
                            'Às vezes perco o foco',
                            'Não, tudo vira caos'
                        ]
                    },
                    {
                        texto: '46 - Você consegue delegar com segurança?',
                        respostas: [
                            'Sim, com tranquilidade',
                            'Só algumas tarefas',
                            'Não consigo confiar'
                        ]
                    },
                    {
                        texto: '47 - A organização evita perda de clientes?',
                        respostas: [
                            'Sim, temos controle e cuidado',
                            'Às vezes cometemos falhas',
                            'Não, já perdemos por desorganização'
                        ]
                    },
                    {
                        texto: '48 - A agenda é bem controlada?',
                        respostas: [
                            'Sim, sem falhas',
                            'Às vezes há furos ou atrasos',
                            'Não, é desorganizada'
                        ]
                    },
                    {
                        texto: '49 - Você usa ferramentas digitais na gestão?',
                        respostas: [
                            'Sim, uso sistemas e controles',
                            'Uso parcialmente',
                            'Não, faço tudo manual'
                        ]
                    },
                    {
                        texto: '50 - A empresa utiliza tecnologias digitais para automatizar processos além da gestão financeira?',
                        respostas: [
                            'Sim, diversas ferramentas em uso',
                            'Algumas, mas pouco integradas',
                            'Não, tudo manual ou pouco tecnológico'
                        ]
                    },
                    {
                        texto: '51 - Existe um sistema para medir a satisfação e fidelidade dos clientes?',
                        respostas: [
                            'Sim, com pesquisas regulares e análise',
                            'Às vezes, mas pouco estruturado',
                            'Não, não medimos'
                        ]
                    },
                    {
                        texto: '52 - A empresa possui planos e controles para minimizar riscos jurídicos e operacionais?',
                        respostas: [
                            'Sim, com políticas e acompanhamento',
                            'Parcialmente, mas pouco formalizados',
                            'Não, não há controle'
                        ]
                    }
                ]
            }
        };

        let divPerguntas = document.getElementById("perguntas");
        let contador = 1;

        for (const bloco in blocos) {
            const secao = blocos[bloco];

            const titulo = document.createElement("h3");
            titulo.className = "bloco-titulo";
            titulo.textContent = secao.titulo;
            divPerguntas.appendChild(titulo);

            secao.perguntas.forEach((obj, index) => {
                const div = document.createElement("div");
                div.className = "pergunta";

                let respostasHTML = obj.respostas.map((resp, i) => {
                    const value = 2 - i; // valor 2, 1, 0
                    const requiredAttr = i === 0 ? "required" : "";
                    return `<label><input type="radio" name="q${contador}" value="${value}" ${requiredAttr}> ${resp}</label>`;
                }).join("");

                div.innerHTML = `
                    <p>${obj.texto}</p>
                    ${respostasHTML}
                `;

                divPerguntas.appendChild(div);
                contador++;
            });
        }