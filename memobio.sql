CREATE DATABASE IF NOT EXISTS `memobio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `memobio`;

DROP TABLE IF EXISTS `tb_acertos`;

CREATE TABLE IF NOT EXISTS `tb_acertos` (
  `id_acerto` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_pergunta` int(11) NOT NULL,
  `resposta_escolhida` varchar(30) DEFAULT NULL,
  `resposta_certa` varchar(30) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_acerto`)
) ENGINE = innoDB DEFAULT CHARSET = utf8;

INSERT INTO
  `tb_acertos` (
    `id_acerto`,
    `id_usuario`,
    `id_pergunta`,
    `resposta_escolhida`,
    `resposta_certa`,
    `status`
  )
VALUES
  (1, 6, 1, 'Aos manguezais', 'Aos manguezais', 1),
  (
    2,
    6,
    1,
    'Às matas de araucária.',
    'Aos manguezais.',
    0
  ),
  (
    3,
    6,
    1,
    'Às matas de araucária.',
    'Aos manguezais.',
    0
  ),
  (
    4,
    6,
    1,
    'Às florestas temperadas.',
    'Aos manguezais.',
    0
  ),
  (5, 6, 1, 'Aos manguezais.', 'Aos manguezais.', 1),
  (6, 0, 1, 'Aos manguezais.', 'Aos manguezais.', 1),
  (
    7,
    0,
    2,
    'Tundra, taiga, floresta tropic',
    'Tundra, taiga, floresta temper',
    0
  ),
  (
    8,
    0,
    2,
    'Taiga, floresta temperada cadu',
    'Tundra, taiga, floresta temper',
    0
  ),
  (
    9,
    0,
    2,
    'Tundra, taiga, floresta temper',
    'Tundra, taiga, floresta temper',
    1
  ),
  (
    10,
    6,
    1,
    'Às florestas temperadas.',
    'Aos manguezais.',
    0
  ),
  (
    11,
    6,
    1,
    'Aos manguezais.',
    'Aos manguezais.',
    1
  ),
  (
    12,
    6,
    2,
    'Taiga, tundra, floresta tropic',
    'Tundra, taiga, floresta temper',
    0
  ),
  (
    13,
    6,
    1,
    'Aos manguezais.',
    'Aos manguezais.',
    1
  ),
  (14, 0, 1, 'Aos cerrados.', 'Aos manguezais.', 0),
  (15, 0, 1, '', '', 1),
  (
    16,
    6,
    1,
    'Aos manguezais.',
    'Aos manguezais.',
    1
  ),
  (
    17,
    6,
    1,
    'Às florestas temperadas.',
    'Aos manguezais.',
    0
  ),
  (
    18,
    6,
    1,
    'Aos manguezais.',
    'Aos manguezais.',
    1
  ),
  (19, 6, 1, 'Aos cerrados.', 'Aos manguezais.', 0),
  (
    20,
    6,
    2,
    'Taiga, floresta temperada cadu',
    'Tundra, taiga, floresta temper',
    0
  ),
  (
    21,
    0,
    1,
    'Aos manguezais.',
    'Aos manguezais.',
    1
  ),
  (
    22,
    6,
    1,
    'Aos manguezais.',
    'Aos manguezais.',
    1
  ),
  (
    23,
    6,
    1,
    'Aos manguezais.',
    'Aos manguezais.',
    1
  ),
  (
    24,
    0,
    1,
    'Às florestas temperadas.',
    'Aos manguezais.',
    0
  ),
  (
    25,
    0,
    2,
    'Tundra, taiga, floresta tropic',
    'Tundra, taiga, floresta temper',
    0
  ),
  (26, 0, 0, '', '', 1),
  (
    27,
    0,
    1,
    'Às florestas temperadas.',
    'Aos manguezais.',
    0
  ),
  (
    28,
    0,
    3,
    'O efeito estufa, pela presenï¿',
    'O efeito estufa, pela presença',
    0
  ),
  (
    29,
    0,
    1,
    'Às florestas tropicais.',
    'Aos manguezais.',
    0
  ),
  (
    30,
    0,
    3,
    'O efeito estufa, pela presenï¿',
    'O efeito estufa, pela presença',
    0
  ),
  (
    31,
    0,
    3,
    'a) Parasitismo e epifitismo',
    'a) Parasitismo e epifitismo',
    1
  ),
  (
    32,
    0,
    5,
    'b) a Mata Atlantica',
    'b) a Mata Atlantica',
    1
  ),
  (
    33,
    0,
    1,
    'Às florestas temperadas.',
    'Aos manguezais.',
    0
  ),
  (34, 0, 1, '', '', 1),
  (
    35,
    0,
    5,
    'b) a Mata Atlantica',
    'b) a Mata Atlantica',
    1
  ),
  (
    36,
    0,
    3,
    'e) Inquilinismo e epifitismo',
    'a) Parasitismo e epifitismo',
    0
  ),
  (
    37,
    0,
    3,
    'b) Epifitismo e holoparasitism',
    'a) Parasitismo e epifitismo',
    0
  ),
  (
    38,
    0,
    3,
    'a) Parasitismo e epifitismo',
    'a) Parasitismo e epifitismo',
    1
  ),
  (39, 0, 0, '', '', 1),
  (
    40,
    0,
    6,
    'c)a Mata dos Cocais. ',
    'b)o Mangue',
    0
  ),
  (
    41,
    0,
    2,
    'Tundra, taiga, floresta tropic',
    'Tundra, taiga, floresta temper',
    0
  ),
  (
    42,
    0,
    1,
    'Às florestas tropicais.',
    'Aos manguezais.',
    0
  ),
  (
    43,
    2,
    1,
    'Às florestas tropicais.',
    'Aos manguezais.',
    0
  ),
  (
    44,
    0,
    1,
    'Às florestas tropicais.',
    'Aos manguezais.',
    0
  );

-- --------------------------------------------------------
--
-- Estrutura para tabela `tb_assuntos`
--
DROP TABLE IF EXISTS `tb_assuntos`;

CREATE TABLE IF NOT EXISTS `tb_assuntos` (
  `idAssuntos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `txtDescritivo` mediumtext DEFAULT NULL,
  `assuntosMain` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idAssuntos`)
) ENGINE = innoDB DEFAULT CHARSET = utf8;

--
-- Despejando dados para a tabela `tb_assuntos`
--
INSERT INTO
  `tb_assuntos` (
    `idAssuntos`,
    `nome`,
    `txtDescritivo`,
    `assuntosMain`
  )
VALUES
  (
    1,
    'Biomas',
    'Unidade biológica ou espaço geográfico cujas características específicas são definidas por certos critérios',
    'Ecologia'
  ),
  (
    2,
    'Sucessão Ecológica',
    'Processo gradual de mudanças da estrutura e composição de uma comunidade.',
    'Ecologia'
  ),
  (
    3,
    'Relações Ecológicas',
    'Como os seres vivos se relacionam, podendo ser intraespecíficas ou interespecíficas, harmônicas ou desarmônicas.',
    'Ecologia'
  ),
  (
    4,
    'Ciclos Biogeoquímicos',
    'Processos que ocorrem na natureza para garantir a reciclagem de elementos químicos no meio',
    'Ecologia'
  );

-- --------------------------------------------------------
--
-- Estrutura para tabela `tb_assuntosMain`
--
DROP TABLE IF EXISTS `tb_assuntosMain`;

CREATE TABLE IF NOT EXISTS `tb_assuntosMain` (
  `id_assuntosMain` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `txtDescritivo` mediumtext DEFAULT NULL,
  `icon` mediumtext DEFAULT NULL,
  PRIMARY KEY (`id_assuntosMain`)
) ENGINE = innoDB DEFAULT CHARSET = utf8;

--
-- Despejando dados para a tabela `tb_assuntosMain`
--
INSERT INTO
  `tb_assuntosMain` (
    `id_assuntosMain`,
    `nome`,
    `txtDescritivo`,
    `icon`
  )
VALUES
  (
    1,
    'Ecologia',
    'Estuda o meio ambiente e os seres vivos que vivem nele, ou seja, é o estudo científico da distribuição e abundância dos seres vivos e das interações que determinam a sua distribuição. ',
    '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cloud\" viewBox=\"0 0 16 16\">\r\n  <path d=\"M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z\"/>\r\n</svg>'
  ),
  (
    2,
    'Bioquímica',
    'A ciência que estuda os processos químicos que ocorrem nos organismos vivos. Tratam da estrutura e função metabólica de componentes celulares como proteínas, carboidratos, lipídios, ácidos nucleicos e outras biomoléculas.',
    '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-droplet\" viewBox=\"0 0 16 16\">\r\n  <path fill-rule=\"evenodd\" d=\"M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z\"/>\r\n  <path fill-rule=\"evenodd\" d=\"M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z\"/>\r\n</svg>'
  ),
  (
    3,
    'Botânica',
    'É o ramo da biologia que estuda a vida de plantas e algas, abrangendo aspectos do crescimento, da reprodução, do desenvolvimento, do metabolismo, das doenças e evolução dos organismos vegetais.',
    '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-flower3\" viewBox=\"0 0 16 16\">\r\n  <path d=\"M11.424 8c.437-.052.811-.136 1.04-.268a2 2 0 0 0-2-3.464c-.229.132-.489.414-.752.767C9.886 4.63 10 4.264 10 4a2 2 0 1 0-4 0c0 .264.114.63.288 1.035-.263-.353-.523-.635-.752-.767a2 2 0 0 0-2 3.464c.229.132.603.216 1.04.268-.437.052-.811.136-1.04.268a2 2 0 1 0 2 3.464c.229-.132.489-.414.752-.767C6.114 11.37 6 11.736 6 12a2 2 0 1 0 4 0c0-.264-.114-.63-.288-1.035.263.353.523.635.752.767a2 2 0 1 0 2-3.464c-.229-.132-.603-.216-1.04-.268zM9 4a1.468 1.468 0 0 1-.045.205c-.039.132-.1.295-.183.484a12.88 12.88 0 0 1-.637 1.223L8 6.142a21.73 21.73 0 0 1-.135-.23 12.88 12.88 0 0 1-.637-1.223 4.216 4.216 0 0 1-.183-.484A1.473 1.473 0 0 1 7 4a1 1 0 1 1 2 0zM3.67 5.5a1 1 0 0 1 1.366-.366 1.472 1.472 0 0 1 .156.142c.094.1.204.233.326.4.245.333.502.747.742 1.163l.13.232a21.86 21.86 0 0 1-.265.002 12.88 12.88 0 0 1-1.379-.06 4.214 4.214 0 0 1-.51-.083 1.47 1.47 0 0 1-.2-.064A1 1 0 0 1 3.67 5.5zm1.366 5.366a1 1 0 0 1-1-1.732c.001 0 .016-.008.047-.02.037-.013.087-.028.153-.044.134-.032.305-.06.51-.083a12.88 12.88 0 0 1 1.379-.06c.09 0 .178 0 .266.002a21.82 21.82 0 0 1-.131.232c-.24.416-.497.83-.742 1.163a4.1 4.1 0 0 1-.327.4 1.483 1.483 0 0 1-.155.142zM9 12a1 1 0 0 1-2 0 1.476 1.476 0 0 1 .045-.206c.039-.131.1-.294.183-.483.166-.378.396-.808.637-1.223L8 9.858l.135.23c.241.415.47.845.637 1.223.083.19.144.352.183.484A1.338 1.338 0 0 1 9 12zm3.33-6.5a1 1 0 0 1-.366 1.366 1.478 1.478 0 0 1-.2.064c-.134.032-.305.06-.51.083-.412.045-.898.061-1.379.06-.09 0-.178 0-.266-.002l.131-.232c.24-.416.497-.83.742-1.163a4.1 4.1 0 0 1 .327-.4c.046-.05.085-.086.114-.11.026-.022.04-.03.041-.032a1 1 0 0 1 1.366.366zm-1.366 5.366a1.494 1.494 0 0 1-.155-.141 4.225 4.225 0 0 1-.327-.4A12.88 12.88 0 0 1 9.74 9.16a22 22 0 0 1-.13-.232l.265-.002c.48-.001.967.015 1.379.06.205.023.376.051.51.083.066.016.116.031.153.044l.048.02a1 1 0 1 1-1 1.732zM8 9a1 1 0 1 1 0-2 1 1 0 0 1 0 2z\"/>\r\n</svg>'
  ),
  (
    4,
    'Genética',
    'A parte da ciência que estuda a hereditariedade, a estrutura e função dos genes e a variação dos seres vivos.',
    '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-gender-ambiguous\" viewBox=\"0 0 16 16\">\r\n  <path fill-rule=\"evenodd\" d=\"M11.5 1a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-3.45 3.45A4 4 0 0 1 8.5 10.97V13H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V14H6a.5.5 0 0 1 0-1h1.5v-2.03a4 4 0 1 1 3.471-6.648L14.293 1H11.5zm-.997 4.346a3 3 0 1 0-5.006 3.309 3 3 0 0 0 5.006-3.31z\"/>\r\n</svg>'
  ),
  (5, '', '', '');

-- --------------------------------------------------------
--
-- Estrutura para tabela `tb_pergunta`
--
DROP TABLE IF EXISTS `tb_pergunta`;

CREATE TABLE IF NOT EXISTS `tb_pergunta` (
  `id_pergunta` int(11) NOT NULL AUTO_INCREMENT,
  `font` varchar(40) DEFAULT NULL,
  `txt` longtext DEFAULT NULL,
  `pergunta` longtext DEFAULT NULL,
  `img` mediumtext DEFAULT NULL,
  `fontImg` mediumtext DEFAULT NULL,
  `alt1` varchar(255) DEFAULT NULL,
  `alt2` varchar(255) DEFAULT NULL,
  `alt3` varchar(255) DEFAULT NULL,
  `alt4` varchar(255) DEFAULT NULL,
  `alt5` varchar(255) DEFAULT NULL,
  `altCerta` varchar(255) DEFAULT NULL,
  `id_assuntos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pergunta`)
) ENGINE = innoDB DEFAULT CHARSET = utf8;

--
-- Despejando dados para a tabela `tb_pergunta`
--
INSERT INTO
  `tb_pergunta` (
    `id_pergunta`,
    `font`,
    `txt`,
    `pergunta`,
    `img`,
    `fontImg`,
    `alt1`,
    `alt2`,
    `alt3`,
    `alt4`,
    `alt5`,
    `altCerta`,
    `id_assuntos`
  )
VALUES
  (
    1,
    '(UFPI)',
    'Considere o texto a seguir:\r\n“São encontrados(as) desde o Amapá até Santa Catarina, nos estuários de vários rios, apresentando solos alagados e instáveis, ricos em matéria orgânica e pouco oxigenados e são áreas de reprodução de diversas espécies marinhas.”\r\n\r\n',
    'O texto refere-se:',
    '',
    '',
    'Às florestas tropicais.',
    'Às florestas temperadas.',
    'Aos manguezais.',
    'Aos cerrados.',
    'Às matas de araucária.',
    'Aos manguezais.',
    1
  ),
  (
    2,
    '(Vunesp-SP)',
    '',
    'Assinale a alternativa que representa, em ordem crescente, os ecossistemas com maior diversidade de vida:',
    '',
    '',
    'Floresta tropical pluvial, tundra, taiga, floresta temperada',
    'Tundra, taiga, floresta tropical pluvial, floresta temperada',
    'Taiga, tundra, floresta tropical pluvial, floresta temperada',
    'Taiga, floresta temperada caducifÃ³lia, tundra, floresta tro',
    'Tundra, taiga, floresta temperada caducifÃ³lia, floresta tro',
    'Tundra, taiga, floresta temperada caducifÃ³lia, floresta tro',
    1
  ),
  (
    3,
    'UFPR',
    'A erva-de-passarinho e algumas bromélias são plantas que fazem fotossíntese e vivem sobre outras. No entanto, a erva-de-passarinho retira água e sais minerais da planta hospedeira enquanto as bromélias apenas se apoiam sobre ela.\r\n\r\n \r\n\r\n',
    'As relacoes da erva-de-passarinho e das bromélias com as plantas hospedeiras são, respectivamente, exemplos de:\r\n',
    NULL,
    '\r\n\r\n\r\n\r\n\r\n',
    'a) Parasitismo e epifitismo',
    'b) Epifitismo e holoparasitismo.',
    'c) Epifitismo e predatismo.',
    'd) Parasitismo e protocooperação.',
    'e) Inquilinismo e epifitismo',
    'a) Parasitismo e epifitismo',
    3
  ),
  (
    4,
    'ITA',
    'A dinâmica do ciclo do carbono é muito variável, quer no espaço quer no tempo. As emissões de carbono ocorrem devido às ações dos seres vivos ou devido a outros fenômenos, como uma erupção vulcânica\r\nque, por exemplo, provoca um aumento temporário de carbono na atmosfera. O sequestro (absorção) do carbono da atmosfera (CO2) é feito principalmente pelos seres clorofilados que, no processo de fotossíntese, sintetizam a molécula da glicose(C6H12O6).\r\n',
    'Para manter armazenado, por longo prazo, o carbono que foi retirado da atmosfera, é aconselhável:\r\n',
    NULL,
    NULL,
    'a) Controlar as atividades vulcânicas',
    'b) Transformar as florestas em zonas agrícolas',
    'c) Instalar hortas em grande parte das residências',
    'd) Impedir o desflorestamento e estimular o reflorestamento',
    'e) Diminuir a biodiversidade, facilitando os cálculos sobre as atividades respiratórias',
    'd) Impedir o desflorestamento e estimular o reflorestamento',
    4
  ),
  (
    5,
    'ETEC 2019',
    'Leia o texto para responder à questão.\r\n\r\n \r\n\r\nNão se sabe quantas espécies vegetais e animais existem no mundo, mas as estimativas são de que os cientistas identificaram apenas uma pequena fração (entre 1% e 10%) das espécies com as quais dividimos nosso planeta. Contudo, a diversidade biológica global vem sendo afetada pelas atividades humanas ao longo do tempo e, hoje, a perda de biodiversidade é um problema.\r\n\r\n \r\n\r\nEm 1988, o ecologista inglês Normam Myers identificou as áreas mais ameaçadas no mundo, as quais chamou de hotspots. Em 1999, embora representassem apenas 1,4% da área do planeta, os 25 hotspots identificados abrigavam 44% de todas as espécies de plantas e 35% das espécies de vertebrados terrestres. Para ser um hotspot, a área deve ter pelo menos 1 500 espécies de plantas endêmicas (que só existem naquela região) e ter 30%, ou menos, de sua vegetação original preservada.\r\n\r\nhttps://tinyurl.com/yaofqe8z Acesso em: 10.02.2019. Adaptado.',
    'Considere o quadro que apresenta dados do Projeto de Monitoramento do Desmatamento dos Biomas Brasileiros por Satélite, em seu relatório de 2009.\r\nA partir da definição de hotspot apresentada no texto e dos dados do quadro, e considerando apenas a porcentagem de área desmatada até 2009, o Bioma Extra-amazônico que pode ser classificado como hotspot é',
    'https://d23vy2bv3rsfba.cloudfront.net/questoes_imagens/0_76bc018b2f8941b68401e3e9e85c1a3b_1351430.jpg.png',
    NULL,
    'a)o Cerrado.',
    'b) a Mata Atlantica',
    'c) a Caatinga',
    'd) o Pampa',
    'e) o Pantanal',
    'b) a Mata Atlantica',
    1
  ),
  (
    6,
    'FCMSCSP',
    'Este ecossistema localiza-se em áreas úmidas, possui espécies vegetais resistentes ao sal, muitas das quais com raízes aéreas e fixadas em ambiente entremeado por bancos de lama, e encontra-se pressionado pela intervenção humana, como a construção de aterros e o despejo de esgoto, que comprometem a vida biológica do lugar.',
    'O ecossistema descrito acima se denomina:',
    NULL,
    NULL,
    'a)a Caatinga.',
    'b)o Mangue',
    'c)a Mata dos Cocais. ',
    'd)a Mata das Araucárias. ',
    'e)a Amazônia.',
    'b)o Mangue',
    1
  ),
  (
    7,
    'UNESP (2015)',
    'As figuras apresentam a vegetação de cinco biomas brasileiros.',
    'Plantas xeromorfas e com folhas modificadas que diminuem a evapotranspiração; plantas com rizóforos e pneumatóforos (eficientes na sustentação da planta e na captura do oxigênio); e plantas epifitas (que vivem sobre outras plantas, aumentando a eficiência na captação de luz) são típicas dos biomas identificados, respectivamente, pelos números',
    'https://d23vy2bv3rsfba.cloudfront.net/questoes_imagens/0_3a1f3c8fc19a589d34bb7ae9980fa1c8_113129.jpg.jpeg',
    NULL,
    'a) 1, 2 e 4.',
    'b) 4, 5 e 2.',
    'c) 3, 1 e 5.',
    'd) 2, 5 e 3.',
    'e) 4, 1 e 3.',
    'e) 4, 1 e 3.',
    1
  ),
  (
    8,
    'ENEM (2010) - Adaptado',
    'Dois pesquisadores percorreram os trajetos marcados no mapa. A tarefa deles foi analisar os ecossistemas e, encontrando problemas, relatar e para os recuperar. A seguir, são reproduzidos trechos aleatórios retirados dos relatórios desses dois pesquisadores.\r\n\r\n \r\n  Trechos do pesquisador P1:\r\n\r\nI. \"Por causa do decremento drástico das espécies vegetais deste ecossistema, como os pinheiros, a gralha azul também está em processo de se extinguir\".\r\n\r\nII. \"As árvores de troncos tortuosos e cascas grossas que predominam nesse ecossistema estão sendo utilizadas em carvoarias\".\r\n\r\n  Trechos do pesquisador P2:\r\n\r\nIII. \"Das palmeiras que predominam nesta região podem ser extraídas substâncias importantes para a economia regional\".\r\n\r\nIV. \"Apesar da aridez desta localidade, em que encontramos muitas plantas espinhosas, não se pode desprezar a sua biodiversidade\".\r\n\r\nEcossistemas brasileiros: mapa de distribuição de ecossistemas.  Disponível em: http://educacao.uol.com.br/ciencias/ult1686u52.jhtm. Acesso em: 20 abr. 2010 (adaptado).',
    'Os trechos I, II, III e IV referem-se, pela ordem, aos seguintes ecossistemas:\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n',
    'https://d23vy2bv3rsfba.cloudfront.net/questoes_imagens/0_b03f29351effb4e644ede74149d8a439_40310.jpg.jpeg',
    NULL,
    'a)Caatinga, Cerrado, Zona dos cocais e Floresta Amazônica.',
    'b)Mata de Araucárias, Cerrado, Zona dos cocais e Caatinga.',
    'c)Manguezais, Zona dos cocais, Cerrado e Mata Atlântica.',
    'd)Floresta Amazônica, Cerrado, Mata Atlântica e Pampas.',
    'e)Mata Atlântica, Cerrado, Zona dos cocais e Pantanal.',
    'b)Mata de Araucárias, Cerrado, Zona dos cocais e Caatinga.',
    1
  );

-- --------------------------------------------------------
--
-- Estrutura para tabela `tb_usuario`
--
DROP TABLE IF EXISTS `tb_usuario`;

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE = innoDB DEFAULT CHARSET = utf8;

--
-- Despejando dados para a tabela `tb_usuario`
--
INSERT INTO
  `tb_usuario` (`id_usuario`, `nome`, `email`, `senha`, `status`)
VALUES
  (1, 'Ana Luiza', 'ana@gmail.com', '12345', 0),
  (2, 'Maria Júlia', 'maju@gmail.com', '12345', 0),
  (
    3,
    'Jamilly Nascimento ',
    'jamillynascimnto@gmail.com',
    '1234',
    0
  ),
  (
    4,
    'Maria Eduarda',
    'mariaedu.ruela@gmail.com',
    'infocansada',
    0
  ),
  (5, 'teste', 'teste@gmail.com', 'Papagaio1@', 0),
  (
    6,
    'Ana Luiza ',
    'analuf2020@gmail.com',
    '12345',
    0
  ),
  (7, '', '', '', 0),
  (
    8,
    'Bhryan',
    '12201000278@muz.ifsuldeminas.e',
    'Papagaio1@',
    0
  ),
  (
    9,
    'bhryan',
    '12201000278@muz.ifsuldeminas.e',
    'Papagaio1@',
    0
  ),
  (
    10,
    'Bhryan Stepenhen',
    '12201000278@muz.ifsuldeminas.e',
    '123456',
    0
  ),
  (
    11,
    'Maria Julia',
    'majuamaoif@gmail.com',
    'maju1234',
    0
  ),
  (
    12,
    'Gabriel Botelho',
    'asfasdf@gmail.com',
    '2022',
    0
  ),
  (
    13,
    'Marli',
    'marlib_lelis@hotmail.com',
    '123456ba',
    0
  ),
  (14, 'Xabeu', 'xabeu@gmail.com', '123456', 0),
  (
    15,
    'Maria Cristina',
    'maria@gmaisl.com',
    '123',
    0
  ),
  (
    16,
    'Bhryan ',
    'bhryanstepenhen@gmail.com',
    'papagaio',
    0
  ),
  (
    17,
    'Matheus Miguel de Paula Ferreira',
    'matheusmiguelpf1997@gmail.com',
    'mtheus29',
    0
  ),
  (
    18,
    'Matheus Miguel de Paula Ferreira',
    'matheusferreira09@hotmail.com',
    'camprock2',
    0
  ),
  (
    19,
    'Ana',
    '12201000822@muz.ifsuldeminas.e',
    'bomdia',
    0
  ),
  (20, 'aline', 'aline@gmail.com', 'aline123', 0),
  (21, 'dsgsdg', 'admin@gmail.com', 'nada', 0);