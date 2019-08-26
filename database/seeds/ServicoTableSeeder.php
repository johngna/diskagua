<?php

use Illuminate\Database\Seeder;

class ServicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('servicos')->insert(['cod'=>'01.00', 'servico'=>'Serviços de informática e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'01.01', 'servico'=>'Análise e desenvolvimento de sistemas.']);
        DB::table('servicos')->insert(['cod'=>'01.02', 'servico'=>'Programação.']);
        DB::table('servicos')->insert(['cod'=>'01.03', 'servico'=>'Processamento de dados e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'01.04', 'servico'=>'Elaboração de programas de computadores, inclusive de jogos eletrônicos.']);
        DB::table('servicos')->insert(['cod'=>'01.05', 'servico'=>'Licenciamento ou cessão de direito de uso de programas de computação.']);
        DB::table('servicos')->insert(['cod'=>'01.06', 'servico'=>'Assessoria e consultoria em informática.']);
        DB::table('servicos')->insert(['cod'=>'01.07', 'servico'=>'Suporte técnico em informática, inclusive instalação, configuração e manutenção de programas de computação e bancos de dados.']);
        DB::table('servicos')->insert(['cod'=>'01.08', 'servico'=>'Planejamento, confecção, manutenção e atualização de páginas eletrônicas.']);
        DB::table('servicos')->insert(['cod'=>'10.00', 'servico'=>'Serviços de intermediação e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'10.01', 'servico'=>'Agenciamento, corretagem ou intermediação de câmbio, de seguros, de cartões de crédito, de planos de saúde e de planos de previdência privada.']);
        DB::table('servicos')->insert(['cod'=>'10.02', 'servico'=>'Agenciamento, corretagem ou intermediação de títulos em geral, valores mobiliários e contratos quaisquer.']);
        DB::table('servicos')->insert(['cod'=>'10.03', 'servico'=>'Agenciamento, corretagem ou intermediação de direitos de propriedade industrial, artística ou literária.']);
        DB::table('servicos')->insert(['cod'=>'10.04', 'servico'=>'Agenciamento, corretagem ou intermediação de contratos de arrendamento mercantil (leasing), de franquia (franchising) e de faturização (factoring).']);
        DB::table('servicos')->insert(['cod'=>'10.05', 'servico'=>'Agenciamento, corretagem ou intermediação de bens móveis ou imóveis, não abrangidos em outros itens ou subitens, inclusive aqueles realizados no âmbito de Bolsas de Mercadorias e Futuros, por quaisquer meios.']);
        DB::table('servicos')->insert(['cod'=>'10.06', 'servico'=>'Agenciamento marítimo.']);
        DB::table('servicos')->insert(['cod'=>'10.07', 'servico'=>'Agenciamento de notícias.']);
        DB::table('servicos')->insert(['cod'=>'10.08', 'servico'=>'Agenciamento de publicidade e propaganda, inclusive o agenciamento de veiculação por quaisquer meios.']);
        DB::table('servicos')->insert(['cod'=>'10.09', 'servico'=>'Representação de qualquer natureza, inclusive comercial.']);
        DB::table('servicos')->insert(['cod'=>'10.10', 'servico'=>'Distribuição de bens de terceiros.']);
        DB::table('servicos')->insert(['cod'=>'11.00', 'servico'=>'Serviços de guarda, estacionamento, armazenamento, vigilância e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'11.01', 'servico'=>'Guarda e estacionamento de veículos terrestres automotores, de aeronaves e de embarcações.']);
        DB::table('servicos')->insert(['cod'=>'11.02', 'servico'=>'Vigilância, segurança ou monitoramento de bens e pessoas.']);
        DB::table('servicos')->insert(['cod'=>'11.03', 'servico'=>'Escolta, inclusive de veículos e cargas.']);
        DB::table('servicos')->insert(['cod'=>'11.04', 'servico'=>'Armazenamento, depósito, carga, descarga, arrumação e guarda de bens de qualquer espécie.']);
        DB::table('servicos')->insert(['cod'=>'12.00', 'servico'=>'Serviços de diversões, lazer, entretenimento e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'12.01', 'servico'=>'Espetáculos teatrais.']);
        DB::table('servicos')->insert(['cod'=>'12.02', 'servico'=>'Exibições cinematográficas.']);
        DB::table('servicos')->insert(['cod'=>'12.03', 'servico'=>'Espetáculos circenses.']);
        DB::table('servicos')->insert(['cod'=>'12.04', 'servico'=>'Programas de auditório.']);
        DB::table('servicos')->insert(['cod'=>'12.05', 'servico'=>'Parques de diversões, centros de lazer e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'12.06', 'servico'=>'Boates, taxi-dancing e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'12.07', 'servico'=>'Shows, ballet, danças, desfiles, bailes, óperas, concertos, recitais, festivais e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'12.08', 'servico'=>'Feiras, exposições, congressos e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'12.09', 'servico'=>'Bilhares, boliches e diversões eletrônicas ou não.']);
        DB::table('servicos')->insert(['cod'=>'12.10', 'servico'=>'Corridas e competições de animais.']);
        DB::table('servicos')->insert(['cod'=>'12.11', 'servico'=>'Competições esportivas ou de destreza física ou intelectual, com ou sem a participação do espectador.']);
        DB::table('servicos')->insert(['cod'=>'12.12', 'servico'=>'Execução de música.']);
        DB::table('servicos')->insert(['cod'=>'12.13', 'servico'=>'Produção, mediante ou sem encomenda prévia, de eventos, espetáculos, entrevistas, shows, ballet, danças, desfiles, bailes, teatros, óperas, concertos, recitais, festivais e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'12.14', 'servico'=>'Fornecimento de música para ambientes fechados ou não, mediante transmissão por qualquer processo.']);
        DB::table('servicos')->insert(['cod'=>'12.15', 'servico'=>'Desfiles de blocos carnavalescos ou folclóricos, trios elétricos e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'12.16', 'servico'=>'Exibição de filmes, entrevistas, musicais, espetáculos, shows, concertos, desfiles, óperas, competições esportivas, de destreza intelectual ou congêneres.']);
        DB::table('servicos')->insert(['cod'=>'12.17', 'servico'=>'Recreação e animação, inclusive em festas e eventos de qualquer natureza.']);
        DB::table('servicos')->insert(['cod'=>'13.00', 'servico'=>'Serviços relativos a fonografia, fotografia, cinematografia e reprografia.']);
        DB::table('servicos')->insert(['cod'=>'13.01', 'servico'=>'(VETADO)']);
        DB::table('servicos')->insert(['cod'=>'13.02', 'servico'=>'Fonografia ou gravação de sons, inclusive trucagem, dublagem, mixagem e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'13.03', 'servico'=>'Fotografia e cinematografia, inclusive revelação, ampliação, cópia, reprodução, trucagem e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'13.04', 'servico'=>'Reprografia, microfilmagem e digitalização.']);
        DB::table('servicos')->insert(['cod'=>'13.05', 'servico'=>'Composição gráfica, fotocomposição, clicheria, zincografia, litografia, fotolitografia.']);
        DB::table('servicos')->insert(['cod'=>'14.00', 'servico'=>'Serviços relativos a bens de terceiros.']);
        DB::table('servicos')->insert(['cod'=>'14.01', 'servico'=>'Lubrificação, limpeza, lustração, revisão, carga e recarga, conserto, restauração, blindagem, manutenção e conservação de máquinas, veículos, aparelhos, equipamentos, motores, elevadores ou de qualquer objeto (exceto peças e partes empregadas, que ficam sujeitas ao ICMS).']);
        DB::table('servicos')->insert(['cod'=>'14.02', 'servico'=>'Assistência técnica.']);
        DB::table('servicos')->insert(['cod'=>'14.03', 'servico'=>'Recondicionamento de motores (exceto peças e partes empregadas, que ficam sujeitas ao ICMS).']);
        DB::table('servicos')->insert(['cod'=>'14.04', 'servico'=>'Recauchutagem ou regeneração de pneus.']);
        DB::table('servicos')->insert(['cod'=>'14.05', 'servico'=>'Restauração, recondicionamento, acondicionamento, pintura, beneficiamento, lavagem, secagem, tingimento, galvanoplastia, anodização, corte, recorte, polimento, plastificação e congêneres, de objetos quaisquer.']);
        DB::table('servicos')->insert(['cod'=>'14.06', 'servico'=>'Instalação e montagem de aparelhos, máquinas e equipamentos, inclusive montagem industrial, prestados ao usuário final, exclusivamente com material por ele fornecido.']);
        DB::table('servicos')->insert(['cod'=>'14.07', 'servico'=>'Colocação de molduras e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'14.08', 'servico'=>'Encadernação, gravação e douração de livros, revistas e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'14.09', 'servico'=>'Alfaiataria e costura, quando o material for fornecido pelo usuário final, exceto aviamento.']);
        DB::table('servicos')->insert(['cod'=>'14.10', 'servico'=>'Tinturaria e lavanderia.']);
        DB::table('servicos')->insert(['cod'=>'14.11', 'servico'=>'Tapeçaria e reforma de estofamentos em geral.']);
        DB::table('servicos')->insert(['cod'=>'14.12', 'servico'=>'Funilaria e lanternagem.']);
        DB::table('servicos')->insert(['cod'=>'14.13', 'servico'=>'Carpintaria e serralheria.']);
        DB::table('servicos')->insert(['cod'=>'15.00', 'servico'=>'Serviços relacionados ao setor bancário ou financeiro, inclusive aqueles prestados por instituições financeiras autorizadas a funcionar pela União ou por quem de direito.']);
        DB::table('servicos')->insert(['cod'=>'15.01', 'servico'=>'Administração de fundos quaisquer, de consórcio, de cartão de crédito ou débito e congêneres, de carteira de clientes, de cheques pré-datados e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'15.02', 'servico'=>'Abertura de contas em geral, inclusive conta-corrente, conta de investimentos e aplicação e caderneta de poupança, no País e no exterior, bem como a manutenção das referidas contas ativas e inativas.']);
        DB::table('servicos')->insert(['cod'=>'15.03', 'servico'=>'Locação e manutenção de cofres particulares, de terminais eletrônicos, de terminais de atendimento e de bens e equipamentos em geral.']);
        DB::table('servicos')->insert(['cod'=>'15.04', 'servico'=>'Fornecimento ou emissão de atestados em geral, inclusive atestado de idoneidade, atestado de capacidade financeira e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'15.05', 'servico'=>'Cadastro, elaboração de ficha cadastral, renovação cadastral e congêneres, inclusão ou exclusão no Cadastro de Emitentes de Cheques sem Fundos – CCF ou em quaisquer outros bancos cadastrais.']);
        DB::table('servicos')->insert(['cod'=>'15.06', 'servico'=>'Emissão, reemissão e fornecimento de avisos, comprovantes e documentos em geral; abono de firmas; coleta e entrega de documentos, bens e valores; comunicação com outra agência ou com a administração central; licenciamento eletrônico de veículos; transferência de veículos; agenciamento fiduciário ou depositário; devolução de bens em custódia.']);
        DB::table('servicos')->insert(['cod'=>'15.07', 'servico'=>'Acesso, movimentação, atendimento e consulta a contas em geral, por qualquer meio ou processo, inclusive por telefone, fac-símile, internet e telex, acesso a terminais de atendimento, inclusive vinte e quatro horas; acesso a outro banco e a rede compartilhada; fornecimento de saldo, extrato e demais informações relativas a contas em geral, por qualquer meio ou processo.']);
        DB::table('servicos')->insert(['cod'=>'15.08', 'servico'=>'Emissão, reemissão, alteração, cessão, substituição, cancelamento e registro de contrato de crédito; estudo, análise e avaliação de operações de crédito; emissão, concessão, alteração ou contratação de aval, fiança, anuência e congêneres; serviços relativos a abertura de crédito, para quaisquer fins.']);
        DB::table('servicos')->insert(['cod'=>'15.09', 'servico'=>'Arrendamento mercantil (leasing) de quaisquer bens, inclusive cessão de direitos e obrigações, substituição de garantia, alteração, cancelamento e registro de contrato, e demais serviços relacionados ao arrendamento mercantil (leasing).']);
        DB::table('servicos')->insert(['cod'=>'15.10', 'servico'=>'Serviços relacionados a cobranças, recebimentos ou pagamentos em geral, de títulos quaisquer, de contas ou carnês, de câmbio, de tributos e por conta de terceiros, inclusive os efetuados por meio eletrônico, automático ou por máquinas de atendimento; fornecimento de posição de cobrança, recebimento ou pagamento; emissão de carnês, fichas de compensação, impressos e documentos em geral.']);
        DB::table('servicos')->insert(['cod'=>'15.11', 'servico'=>'Devolução de títulos, protesto de títulos, sustação de protesto, manutenção de títulos, reapresentação de títulos, e demais serviços a eles relacionados.']);
        DB::table('servicos')->insert(['cod'=>'15.12', 'servico'=>'Custódia em geral, inclusive de títulos e valores mobiliários.']);
        DB::table('servicos')->insert(['cod'=>'15.13', 'servico'=>'Serviços relacionados a operações de câmbio em geral, edição, alteração, prorrogação, cancelamento e baixa de contrato de câmbio; emissão de registro de exportação ou de crédito; cobrança ou depósito no exterior; emissão, fornecimento e cancelamento de cheques de viagem; fornecimento, transferência, cancelamento e demais serviços relativos a carta de crédito de importação, exportação e garantias recebidas; envio e recebimento de mensagens em geral relacionadas a operações de câmbio.']);
        DB::table('servicos')->insert(['cod'=>'15.14', 'servico'=>'Fornecimento, emissão, reemissão, renovação e manutenção de cartão magnético, cartão de crédito, cartão de débito, cartão salário e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'15.15', 'servico'=>'Compensação de cheques e títulos quaisquer; serviços relacionados a depósito, inclusive depósito identificado, a saque de contas quaisquer, por qualquer meio ou processo, inclusive em terminais eletrônicos e de atendimento.']);
        DB::table('servicos')->insert(['cod'=>'15.16', 'servico'=>'Emissão, reemissão, liquidação, alteração, cancelamento e baixa de ordens de pagamento, ordens de crédito e similares, por qualquer meio ou processo; serviços relacionados à transferência de valores, dados, fundos, pagamentos e similares, inclusive entre contas em geral.']);
        DB::table('servicos')->insert(['cod'=>'15.17', 'servico'=>'Emissão, fornecimento, devolução, sustação, cancelamento e oposição de cheques quaisquer, avulso ou por talão.']);
        DB::table('servicos')->insert(['cod'=>'15.18', 'servico'=>'Serviços relacionados a crédito imobiliário, avaliação e vistoria de imóvel ou obra, análise técnica e jurídica, emissão, reemissão, alteração, transferência e renegociação de contrato, emissão e reemissão do termo de quitação e demais serviços relacionados a crédito imobiliário.']);
        DB::table('servicos')->insert(['cod'=>'16.00', 'servico'=>'Serviços de transporte de natureza municipal.']);
        DB::table('servicos')->insert(['cod'=>'16.01', 'servico'=>'Serviços de transporte de natureza municipal.']);
        DB::table('servicos')->insert(['cod'=>'17.00', 'servico'=>'Serviços de apoio técnico, administrativo, jurídico, contábil, comercial e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'17.01', 'servico'=>'Assessoria ou consultoria de qualquer natureza, não contida em outros itens desta lista; análise, exame, pesquisa, coleta, compilação e fornecimento de dados e informações de qualquer natureza, inclusive cadastro e similares.']);
        DB::table('servicos')->insert(['cod'=>'17.02', 'servico'=>'Datilografia, digitação, estenografia, expediente, secretaria em geral, resposta audível, redação, edição, interpretação, revisão, tradução, apoio e infra-estrutura administrativa e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'17.03', 'servico'=>'Planejamento, coordenação, programação ou organização técnica, financeira ou administrativa.']);
        DB::table('servicos')->insert(['cod'=>'17.04', 'servico'=>'Recrutamento, agenciamento, seleção e colocação de mão-de-obra.']);
        DB::table('servicos')->insert(['cod'=>'17.05', 'servico'=>'Fornecimento de mão-de-obra, mesmo em caráter temporário, inclusive de empregados ou trabalhadores, avulsos ou temporários, contratados pelo prestador de serviço.']);
        DB::table('servicos')->insert(['cod'=>'17.06', 'servico'=>'Propaganda e publicidade, inclusive promoção de vendas, planejamento de campanhas ou sistemas de publicidade, elaboração de desenhos, textos e demais materiais publicitários.']);
        DB::table('servicos')->insert(['cod'=>'17.07', 'servico'=>'(VETADO)']);
        DB::table('servicos')->insert(['cod'=>'17.08', 'servico'=>'Franquia (franchising).']);
        DB::table('servicos')->insert(['cod'=>'17.09', 'servico'=>'Perícias, laudos, exames técnicos e análises técnicas.']);
        DB::table('servicos')->insert(['cod'=>'17.10', 'servico'=>'Planejamento, organização e administração de feiras, exposições, congressos e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'17.11', 'servico'=>'Organização de festas e recepções; bufê (exceto o fornecimento de alimentação e bebidas, que fica sujeito ao ICMS).']);
        DB::table('servicos')->insert(['cod'=>'17.12', 'servico'=>'Administração em geral, inclusive de bens e negócios de terceiros.']);
        DB::table('servicos')->insert(['cod'=>'17.13', 'servico'=>'Leilão e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'17.14', 'servico'=>'Advocacia.']);
        DB::table('servicos')->insert(['cod'=>'17.15', 'servico'=>'Arbitragem de qualquer espécie, inclusive jurídica.']);
        DB::table('servicos')->insert(['cod'=>'17.16', 'servico'=>'Auditoria.']);
        DB::table('servicos')->insert(['cod'=>'17.17', 'servico'=>'Análise de Organização e Métodos.']);
        DB::table('servicos')->insert(['cod'=>'17.18', 'servico'=>'Atuária e cálculos técnicos de qualquer natureza.']);
        DB::table('servicos')->insert(['cod'=>'17.19', 'servico'=>'Contabilidade, inclusive serviços técnicos e auxiliares.']);
        DB::table('servicos')->insert(['cod'=>'17.20', 'servico'=>'Consultoria e assessoria econômica ou financeira.']);
        DB::table('servicos')->insert(['cod'=>'17.21', 'servico'=>'Estatística.']);
        DB::table('servicos')->insert(['cod'=>'17.22', 'servico'=>'Cobrança em geral.']);
        DB::table('servicos')->insert(['cod'=>'17.23', 'servico'=>'Assessoria, análise, avaliação, atendimento, consulta, cadastro, seleção, gerenciamento de informações, administração de contas a receber ou a pagar e em geral, relacionados a operações de faturização (factoring).']);
        DB::table('servicos')->insert(['cod'=>'17.24', 'servico'=>'Apresentação de palestras, conferências, seminários e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'18.00', 'servico'=>'Serviços de regulação de sinistros vinculados a contratos de seguros; inspeção e avaliação de riscos para cobertura de contratos de seguros; prevenção e gerência de riscos seguráveis e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'18.01', 'servico'=>'Serviços de regulação de sinistros vinculados a contratos de seguros; inspeção e avaliação de riscos para cobertura de contratos de seguros; prevenção e gerência de riscos seguráveis e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'19.00', 'servico'=>'Serviços de distribuição e venda de bilhetes e demais produtos de loteria, bingos, cartões, pules ou cupons de apostas, sorteios, prêmios, inclusive os decorrentes de títulos de capitalização e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'19.01', 'servico'=>'Serviços de distribuição e venda de bilhetes e demais produtos de loteria, bingos, cartões, pules ou cupons de apostas, sorteios, prêmios, inclusive os decorrentes de títulos de capitalização e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'02.00', 'servico'=>'Serviços de pesquisas e desenvolvimento de qualquer natureza.']);
        DB::table('servicos')->insert(['cod'=>'02.01', 'servico'=>'Serviços de pesquisas e desenvolvimento de qualquer natureza.']);
        DB::table('servicos')->insert(['cod'=>'20.00', 'servico'=>'Serviços portuários, aeroportuários, ferroportuários, de terminais rodoviários, ferroviários e metroviários.']);
        DB::table('servicos')->insert(['cod'=>'20.01', 'servico'=>'Serviços portuários, ferroportuários, utilização de porto, movimentação de passageiros, reboque de embarcações, rebocador escoteiro, atracação, desatracação, serviços de praticagem, capatazia, armazenagem de qualquer natureza, serviços acessórios, movimentação de mercadorias, serviços de apoio marítimo, de movimentação ao largo, serviços de armadores, estiva, conferência, logística e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'20.02', 'servico'=>'Serviços aeroportuários, utilização de aeroporto, movimentação de passageiros, armazenagem de qualquer natureza, capatazia, movimentação de aeronaves, serviços de apoio aeroportuários, serviços acessórios, movimentação de mercadorias, logística e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'20.03', 'servico'=>'Serviços de terminais rodoviários, ferroviários, metroviários, movimentação de passageiros, mercadorias, inclusive     suas operações, logística e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'21.00', 'servico'=>'Serviços de registros públicos, cartorários e notariais.']);
        DB::table('servicos')->insert(['cod'=>'21.01', 'servico'=>'Serviços de registros públicos, cartorários e notariais.']);
        DB::table('servicos')->insert(['cod'=>'22.00', 'servico'=>'Serviços de exploração de rodovia.']);
        DB::table('servicos')->insert(['cod'=>'22.01', 'servico'=>'Serviços de exploração de rodovia mediante cobrança de preço ou pedágio dos usuários, envolvendo execução de serviços de conservação, manutenção, melhoramentos para adequação de capacidade e segurança de trânsito, operação, monitoração, assistência aos usuários e outros serviços definidos em contratos, atos de concessão ou de permissão ou em normas oficiais.']);
        DB::table('servicos')->insert(['cod'=>'23.00', 'servico'=>'Serviços de programação e comunicação visual, desenho industrial e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'23.01', 'servico'=>'Serviços de programação e comunicação visual, desenho industrial e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'24.00', 'servico'=>'Serviços de chaveiros, confecção de carimbos, placas, sinalização visual, banners, adesivos e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'24.01', 'servico'=>'Serviços de chaveiros, confecção de carimbos, placas, sinalização visual, banners, adesivos e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'25.00', 'servico'=>'Serviços funerários.']);
        DB::table('servicos')->insert(['cod'=>'25.01', 'servico'=>'Funerais, inclusive fornecimento de caixão, urna ou esquifes; aluguel de capela; transporte do corpo cadavérico; fornecimento de flores, coroas e outros paramentos; desembaraço de certidão de óbito; fornecimento de véu, essa e outros adornos; embalsamento, embelezamento, conservação ou restauração de cadáveres.']);
        DB::table('servicos')->insert(['cod'=>'25.02', 'servico'=>'Cremação de corpos e partes de corpos cadavéricos.']);
        DB::table('servicos')->insert(['cod'=>'25.03', 'servico'=>'Planos ou convênio funerários.']);
        DB::table('servicos')->insert(['cod'=>'25.04', 'servico'=>'Manutenção e conservação de jazigos e cemitérios.']);
        DB::table('servicos')->insert(['cod'=>'26.00', 'servico'=>'Serviços de coleta, remessa ou entrega de correspondências, documentos, objetos, bens ou valores, inclusive pelos correios e suas agências franqueadas; courrier e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'26.01', 'servico'=>'Serviços de coleta, remessa ou entrega de correspondências, documentos, objetos, bens ou valores, inclusive pelos correios e suas agências franqueadas; courrier e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'27.00', 'servico'=>'Serviços de assistência social.']);
        DB::table('servicos')->insert(['cod'=>'27.01', 'servico'=>'Serviços de assistência social.']);
        DB::table('servicos')->insert(['cod'=>'28.00', 'servico'=>'Serviços de avaliação de bens e serviços de qualquer natureza.']);
        DB::table('servicos')->insert(['cod'=>'28.01', 'servico'=>'Serviços de avaliação de bens e serviços de qualquer natureza.']);
        DB::table('servicos')->insert(['cod'=>'29.00', 'servico'=>'Serviços de biblioteconomia.']);
        DB::table('servicos')->insert(['cod'=>'29.01', 'servico'=>'Serviços de biblioteconomia.']);
        DB::table('servicos')->insert(['cod'=>'03.00', 'servico'=>'Serviços prestados mediante locação, cessão de direito de uso e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'03.01', 'servico'=>'(VETADO)']);
        DB::table('servicos')->insert(['cod'=>'03.02', 'servico'=>'Cessão de direito de uso de marcas e de sinais de propaganda.']);
        DB::table('servicos')->insert(['cod'=>'03.03', 'servico'=>'Exploração de salões de festas, centro de convenções, escritórios virtuais, stands, quadras esportivas, estádios, ginásios, auditórios, casas de espetáculos, parques de diversões, canchas e congêneres, para realização de eventos ou negócios de qualquer natureza.']);
        DB::table('servicos')->insert(['cod'=>'03.04', 'servico'=>'Locação, sublocação, arrendamento, direito de passagem ou permissão de uso, compartilhado ou não, de ferrovia, rodovia, postes, cabos, dutos e condutos de qualquer natureza.']);
        DB::table('servicos')->insert(['cod'=>'03.05', 'servico'=>'Cessão de andaimes, palcos, coberturas e outras estruturas de uso temporário.']);
        DB::table('servicos')->insert(['cod'=>'30.00', 'servico'=>'Serviços de biologia, biotecnologia e química.']);
        DB::table('servicos')->insert(['cod'=>'30.01', 'servico'=>'Serviços de biologia, biotecnologia e química.']);
        DB::table('servicos')->insert(['cod'=>'31.00', 'servico'=>'Serviços técnicos em edificações, eletrônica, eletrotécnica, mecânica, telecomunicações e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'31.01', 'servico'=>'Serviços técnicos em edificações, eletrônica, eletrotécnica, mecânica, telecomunicações e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'32.00', 'servico'=>'Serviços de desenhos técnicos.']);
        DB::table('servicos')->insert(['cod'=>'32.01', 'servico'=>'Serviços de desenhos técnicos.']);
        DB::table('servicos')->insert(['cod'=>'33.00', 'servico'=>'Serviços de desembaraço aduaneiro, comissários, despachantes e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'33.01', 'servico'=>'Serviços de desembaraço aduaneiro, comissários, despachantes e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'34.00', 'servico'=>'Serviços de investigações particulares, detetives e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'34.01', 'servico'=>'Serviços de investigações particulares, detetives e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'35.00', 'servico'=>'Serviços de reportagem, assessoria de imprensa, jornalismo e relações públicas.']);
        DB::table('servicos')->insert(['cod'=>'35.01', 'servico'=>'Serviços de reportagem, assessoria de imprensa, jornalismo e relações públicas.']);
        DB::table('servicos')->insert(['cod'=>'36.00', 'servico'=>'Serviços de meteorologia.']);
        DB::table('servicos')->insert(['cod'=>'36.01', 'servico'=>'Serviços de meteorologia.']);
        DB::table('servicos')->insert(['cod'=>'37.00', 'servico'=>'Serviços de artistas, atletas, modelos e manequins.']);
        DB::table('servicos')->insert(['cod'=>'37.01', 'servico'=>'Serviços de artistas, atletas, modelos e manequins.']);
        DB::table('servicos')->insert(['cod'=>'38.00', 'servico'=>'Serviços de museologia.']);
        DB::table('servicos')->insert(['cod'=>'38.01', 'servico'=>'Serviços de museologia.']);
        DB::table('servicos')->insert(['cod'=>'39.00', 'servico'=>'Serviços de ourivesaria e lapidação.']);
        DB::table('servicos')->insert(['cod'=>'39.01', 'servico'=>'Serviços de ourivesaria e lapidação (quando o material for fornecido pelo tomador do serviço).']);
        DB::table('servicos')->insert(['cod'=>'04.00', 'servico'=>'Serviços de saúde, assistência médica e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'04.01', 'servico'=>'Medicina e biomedicina.']);
        DB::table('servicos')->insert(['cod'=>'04.02', 'servico'=>'Análises clínicas, patologia, eletricidade médica, radioterapia, quimioterapia, ultra-sonografia, ressonância magnética, radiologia, tomografia e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'04.03', 'servico'=>'Hospitais, clínicas, laboratórios, sanatórios, manicômios, casas de saúde, prontos-socorros, ambulatórios e         congêneres.']);
        DB::table('servicos')->insert(['cod'=>'04.04', 'servico'=>'Instrumentação cirúrgica.']);
        DB::table('servicos')->insert(['cod'=>'04.05', 'servico'=>'Acupuntura.']);
        DB::table('servicos')->insert(['cod'=>'04.06', 'servico'=>'Enfermagem, inclusive serviços auxiliares.']);
        DB::table('servicos')->insert(['cod'=>'04.07', 'servico'=>'Serviços farmacêuticos.']);
        DB::table('servicos')->insert(['cod'=>'04.08', 'servico'=>'Terapia ocupacional, fisioterapia e fonoaudiologia.']);
        DB::table('servicos')->insert(['cod'=>'04.09', 'servico'=>'Terapias de qualquer espécie destinadas ao tratamento físico, orgânico e mental.']);
        DB::table('servicos')->insert(['cod'=>'04.10', 'servico'=>'Nutrição.']);
        DB::table('servicos')->insert(['cod'=>'04.11', 'servico'=>'Obstetrícia.']);
        DB::table('servicos')->insert(['cod'=>'04.12', 'servico'=>'Odontologia.']);
        DB::table('servicos')->insert(['cod'=>'04.13', 'servico'=>'Ortóptica.']);
        DB::table('servicos')->insert(['cod'=>'04.14', 'servico'=>'Próteses sob encomenda.']);
        DB::table('servicos')->insert(['cod'=>'04.15', 'servico'=>'Psicanálise.']);
        DB::table('servicos')->insert(['cod'=>'04.16', 'servico'=>'Psicologia.']);
        DB::table('servicos')->insert(['cod'=>'04.17', 'servico'=>'Casas de repouso e de recuperação, creches, asilos e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'04.18', 'servico'=>'Inseminação artificial, fertilização in vitro e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'04.19', 'servico'=>'Bancos de sangue, leite, pele, olhos, óvulos, sêmen e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'04.20', 'servico'=>'Coleta de sangue, leite, tecidos, sêmen, órgãos e materiais biológicos de qualquer espécie.']);
        DB::table('servicos')->insert(['cod'=>'04.21', 'servico'=>'Unidade de atendimento, assistência ou tratamento móvel e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'04.22', 'servico'=>'Planos de medicina de grupo ou individual e convênios para prestação de assistência médica, hospitalar, odontológica e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'04.23', 'servico'=>'Outros planos de saúde que se cumpram através de serviços de terceiros contratados, credenciados, cooperados ou apenas pagos pelo operador do plano mediante indicação do beneficiário.']);
        DB::table('servicos')->insert(['cod'=>'40.00', 'servico'=>'Serviços relativos a obras de arte sob encomenda.']);
        DB::table('servicos')->insert(['cod'=>'40.01', 'servico'=>'Obras de arte sob encomenda.']);
        DB::table('servicos')->insert(['cod'=>'05.00', 'servico'=>'Serviços de medicina e assistência veterinária e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'05.01', 'servico'=>'Medicina veterinária e zootecnia.']);
        DB::table('servicos')->insert(['cod'=>'05.02', 'servico'=>'Hospitais, clínicas, ambulatórios, prontos-socorros e congêneres, na área veterinária.']);
        DB::table('servicos')->insert(['cod'=>'05.03', 'servico'=>'Laboratórios de análise na área veterinária.']);
        DB::table('servicos')->insert(['cod'=>'05.04', 'servico'=>'Inseminação artificial, fertilização in vitro e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'05.05', 'servico'=>'Bancos de sangue e de órgãos e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'05.06', 'servico'=>'Coleta de sangue, leite, tecidos, sêmen, órgãos e materiais biológicos de qualquer espécie.']);
        DB::table('servicos')->insert(['cod'=>'05.07', 'servico'=>'Unidade de atendimento, assistência ou tratamento móvel e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'05.08', 'servico'=>'Guarda, tratamento, amestramento, embelezamento, alojamento e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'05.09', 'servico'=>'Planos de atendimento e assistência médico-veterinária.']);
        DB::table('servicos')->insert(['cod'=>'06.00', 'servico'=>'Serviços de cuidados pessoais, estética, atividades físicas e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'06.01', 'servico'=>'Barbearia, cabeleireiros, manicuros, pedicuros e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'06.02', 'servico'=>'Esteticistas, tratamento de pele, depilação e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'06.03', 'servico'=>'Banhos, duchas, sauna, massagens e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'06.04', 'servico'=>'Ginástica, dança, esportes, natação, artes marciais e demais atividades físicas.']);
        DB::table('servicos')->insert(['cod'=>'06.05', 'servico'=>'Centros de emagrecimento, spa e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'07.00', 'servico'=>'Serviços relativos a engenharia, arquitetura, geologia, urbanismo, construção civil, manutenção, limpeza, meio ambiente, saneamento e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'07.01', 'servico'=>'Engenharia, agronomia, agrimensura, arquitetura, geologia, urbanismo, paisagismo e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'07.02', 'servico'=>'Execução, por administração, empreitada ou subempreitada, de obras de construção civil, hidráulica ou elétrica e de outras obras semelhantes, inclusive sondagem, perfuração de poços, escavação, drenagem e irrigação, terraplanagem, pavimentação, concretagem e a instalação e montagem de produtos, peças e equipamentos (exceto o fornecimento de mercadorias produzidas pelo prestador de serviços fora do local da prestação dos serviços, que fica sujeito ao ICMS).']);
        DB::table('servicos')->insert(['cod'=>'07.03', 'servico'=>'Elaboração de planos diretores, estudos de viabilidade, estudos organizacionais e outros, relacionados com obras e serviços de engenharia; elaboração de anteprojetos, projetos básicos e projetos executivos para trabalhos de engenharia.']);
        DB::table('servicos')->insert(['cod'=>'07.04', 'servico'=>'Demolição.']);
        DB::table('servicos')->insert(['cod'=>'07.05', 'servico'=>'Reparação, conservação e reforma de edifícios, estradas, pontes, portos e congêneres (exceto o fornecimento de mercadorias produzidas pelo prestador dos serviços, fora do local da prestação dos serviços, que fica sujeito ao ICMS).']);
        DB::table('servicos')->insert(['cod'=>'07.06', 'servico'=>'Colocação e instalação de tapetes, carpetes, assoalhos, cortinas, revestimentos de parede, vidros, divisórias, placas de gesso e congêneres, com material fornecido pelo tomador do serviço.']);
        DB::table('servicos')->insert(['cod'=>'07.07', 'servico'=>'Recuperação, raspagem, polimento e lustração de pisos e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'07.08', 'servico'=>'Calafetação.']);
        DB::table('servicos')->insert(['cod'=>'07.09', 'servico'=>'Varrição, coleta, remoção, incineração, tratamento, reciclagem, separação e destinação final de lixo, rejeitos e outros resíduos quaisquer.']);
        DB::table('servicos')->insert(['cod'=>'07.10', 'servico'=>'Limpeza, manutenção e conservação de vias e logradouros públicos, imóveis, chaminés, piscinas, parques, jardins e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'07.11', 'servico'=>'Decoração e jardinagem, inclusive corte e poda de árvores.']);
        DB::table('servicos')->insert(['cod'=>'07.12', 'servico'=>'Controle e tratamento de efluentes de qualquer natureza e de agentes físicos, químicos e biológicos.']);
        DB::table('servicos')->insert(['cod'=>'07.13', 'servico'=>'Dedetização, desinfecção, desinsetização, imunização, higienização, desratização, pulverização e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'07.14', 'servico'=>'(VETADO)']);
        DB::table('servicos')->insert(['cod'=>'07.15', 'servico'=>'(VETADO)']);
        DB::table('servicos')->insert(['cod'=>'07.16', 'servico'=>'Florestamento, reflorestamento, semeadura, adubação e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'07.17', 'servico'=>'Escoramento, contenção de encostas e serviços congêneres.']);
        DB::table('servicos')->insert(['cod'=>'07.18', 'servico'=>'Limpeza e dragagem de rios, portos, canais, baías, lagos, lagoas, represas, açudes e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'07.19', 'servico'=>'Acompanhamento e fiscalização da execução de obras de engenharia, arquitetura e urbanismo.']);
        DB::table('servicos')->insert(['cod'=>'07.20', 'servico'=>'Aerofotogrametria (inclusive interpretação), cartografia, mapeamento, levantamentos topográficos, batimétricos, geográficos, geodésicos, geológicos, geofísicos e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'07.21', 'servico'=>'Pesquisa, perfuração, cimentação, mergulho, perfilagem, concretação, testemunhagem, pescaria, estimulação e outros serviços relacionados com a exploração e explotação de petróleo, gás natural e de outros recursos minerais.']);
        DB::table('servicos')->insert(['cod'=>'07.22', 'servico'=>'Nucleação e bombardeamento de nuvens e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'08.00', 'servico'=>'Serviços de educação, ensino, orientação pedagógica e educacional, instrução, treinamento e avaliação pessoal de qualquer grau ou natureza.']);
        DB::table('servicos')->insert(['cod'=>'08.01', 'servico'=>'Ensino regular pré-escolar, fundamental, médio e superior.']);
        DB::table('servicos')->insert(['cod'=>'08.02', 'servico'=>'Instrução, treinamento, orientação pedagógica e educacional, avaliação de conhecimentos de qualquer natureza.']);
        DB::table('servicos')->insert(['cod'=>'09.00', 'servico'=>'Serviços relativos a hospedagem, turismo, viagens e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'09.01', 'servico'=>'Hospedagem de qualquer natureza em hotéis, apart-service condominiais, flat, apart-hotéis, hotéis residência, residence-service, suite service, hotelaria marítima, motéis, pensões e congêneres; ocupação por temporada com fornecimento de serviço (o valor da alimentação e gorjeta, quando incluído no preço da diária, fica sujeito ao Imposto Sobre Serviços).']);
        DB::table('servicos')->insert(['cod'=>'09.02', 'servico'=>'Agenciamento, organização, promoção, intermediação e execução de programas de turismo, passeios, viagens, excursões, hospedagens e congêneres.']);
        DB::table('servicos')->insert(['cod'=>'09.03', 'servico'=>'Guias de turismo.']);
        DB::table('servicos')->insert(['cod'=>'9999', 'servico'=>'']);


    }
}