-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Nov-2017 às 20:42
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rankquest`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso_questionario`
--

CREATE TABLE `acesso_questionario` (
  `id` int(10) UNSIGNED NOT NULL,
  `questionario_id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `dt_cad` datetime DEFAULT NULL,
  `ind_status` char(1) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativa`
--

CREATE TABLE `alternativa` (
  `id` int(10) UNSIGNED NOT NULL,
  `pergunta_id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(320) NOT NULL,
  `ind_correta` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alternativa`
--

INSERT INTO `alternativa` (`id`, `pergunta_id`, `descricao`, `ind_correta`) VALUES
(1, 1, '00011010 ', 'S'),
(2, 1, '11010.000 ', ''),
(3, 1, '11010000', ''),
(4, 1, '11001.111 ', ''),
(5, 1, '000.11001 ', ''),
(6, 2, 'for($x = 0; $x < $x_temp; $x++)', ''),
(7, 2, 'for($processos as $x => $x_temp)', ''),
(8, 2, 'foreach($processos as $x => $x_temp)', 'S'),
(9, 2, 'foreach(($x = 0; $x < $x_temp; $x++)', ''),
(10, 2, 'while($x = 0; $x < $x_temp; $x++)', ''),
(11, 3, 'self::$dbh->execute', ''),
(12, 3, '$dbh->update', ''),
(13, 3, '$dbh->exec', 'S'),
(14, 3, 'PDO: :exec', ''),
(15, 3, 'PDO: :query', ''),
(16, 4, '10', ''),
(17, 4, '7', ''),
(18, 4, '11', 'S'),
(19, 4, '6', ''),
(20, 4, '9', ''),
(21, 5, 'Uma variável é composta pelo nome dessa variável seguido do sinal $ no final.', ''),
(22, 5, 'Um nome de variável pode começar com um número.', ''),
(23, 5, 'Os tipos de variáveis existentes são somente local e global.', ''),
(24, 5, 'Diferentemente das linguagens em que o programador deve declarar o nome e o tipo da variável antes de usá-la, o PHP converte automaticamente a variável para o tipo de dado correto.', 'S'),
(25, 5, 'Os nomes das variáveis no PHP não diferenciam maiúsculas de minúsculas, ou seja, eles são case insentivive.', ''),
(26, 6, 'Cada variável em PHP 5 ou superior contém uma cópia de todo o objeto, e uma cópia do objeto é realizada quando ele é passado no argumento de uma função (passagem de parâmetro por valor). ', ''),
(27, 6, 'Classes podem implementar mais de uma interface. ', 'S'),
(28, 6, 'Propriedades e métodos não podem ter um mesmo nome ou identificador.', ''),
(29, 6, 'Em um construtor de uma subclasse para invocar o construtor da superclasse, é necessário invocar a instrução “super::__construct()”.', ''),
(30, 6, 'O termo final deve ser aplicado aos métodos (funções) do PHP que podem ser sobrescritos nas subclasses.', ''),
(31, 7, 'Uma função f2 descrita no corpo da função f1 fica disponível para o script PHP após a declaração de f1, mesmo que f1 não seja executada.', ''),
(32, 7, ' Uma função f2 declarada no corpo da função f1 fica disponível para o script PHP após a execução de f1. ', 'S'),
(33, 7, 'Os parâmetros passados por referência devem ser identificados na declaração da função precedidos do símbolo @.', ''),
(34, 7, 'O uso de “:::” antes do nome de um argumento de uma função indica que a função recebe um número arbitrário de argumentos na forma de um array.', ''),
(35, 7, 'Funções (callback) podem ser passadas como argumento para outras funções, desde que não sejam anônimas.', ''),
(36, 8, '$_GET ', ''),
(37, 8, ' $_GLOBALS ', ''),
(38, 8, '$_ENVIRONMENT ', ''),
(39, 8, '$_SESSION', ''),
(40, 8, '$_SERVER ', 'S'),
(41, 9, 'Herança múltipla', ''),
(42, 9, 'Redundância', ''),
(43, 9, 'Sobrecarga', 'S'),
(44, 9, 'Herança', ''),
(45, 9, 'Polimorfismo', ''),
(46, 10, 'strlen(“string”)', 'S'),
(47, 10, 'tan(“string”)', ''),
(48, 10, 'strmid(“string”)', ''),
(49, 10, 'chr(“string”)', ''),
(50, 10, 'trin(\"string\")', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `cpf` char(11) NOT NULL,
  `data_nascimento` date NOT NULL,
  `level` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `xp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `url_curriculum` varchar(120) DEFAULT NULL,
  `status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`usuario_id`, `cpf`, `data_nascimento`, `level`, `xp`, `url_curriculum`, `status`) VALUES
(1, 'admin', '1997-02-07', 0, 0, NULL, 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_turma`
--

CREATE TABLE `aluno_turma` (
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `turma_id` int(10) UNSIGNED NOT NULL,
  `dt_cad` datetime NOT NULL,
  `ind_status` char(1) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `assunto`
--

CREATE TABLE `assunto` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `assunto`
--

INSERT INTO `assunto` (`id`, `categoria_id`, `descricao`) VALUES
(4, 1, 'Java'),
(5, 1, 'VISUAL BASIC'),
(6, 1, 'JavaScript'),
(7, 1, 'Php'),
(8, 1, 'C#'),
(9, 1, 'C'),
(10, 1, 'C++'),
(11, 1, 'Python'),
(12, 1, 'OBJECTIVE-C'),
(13, 1, 'RUBY'),
(14, 2, 'Oracle'),
(15, 2, 'MySQL'),
(16, 2, 'Microsoft SQL Server'),
(17, 2, 'PostgreSQL'),
(18, 2, 'MongoDB'),
(19, 2, 'DB2'),
(20, 2, 'Microsoft Access'),
(21, 2, 'SQLite'),
(22, 2, 'SyBase ASE'),
(23, 2, 'Cassandra'),
(24, 3, 'Arquitetura de Redes'),
(25, 3, 'Cabeamento Estruturado'),
(26, 3, 'Topologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `descricao`) VALUES
(1, 'Programação'),
(2, 'Banco de dados'),
(3, 'Sistemas Operacionais'),
(4, 'Noções de informática'),
(5, 'Redes de Computadores'),
(6, 'Segurança da Informação'),
(7, 'Sistemas Operacionais'),
(8, 'Engenharia de Software'),
(9, 'Governança de TI'),
(10, 'Arquitetura de Computadores'),
(11, 'Algoritmos e Estrutura de Dados'),
(12, 'Sistemas de informação'),
(13, 'Arquitetura de Software');

-- --------------------------------------------------------

--
-- Estrutura da tabela `convite_turma`
--

CREATE TABLE `convite_turma` (
  `id` int(10) UNSIGNED NOT NULL,
  `aluno_id` int(10) UNSIGNED NOT NULL,
  `turma_id` int(11) UNSIGNED NOT NULL,
  `professor_id` int(10) UNSIGNED NOT NULL,
  `dt_cadastro` datetime NOT NULL,
  `ind_status` char(1) NOT NULL DEFAULT 'A',
  `descricao` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dificuldade`
--

CREATE TABLE `dificuldade` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dificuldade`
--

INSERT INTO `dificuldade` (`id`, `descricao`) VALUES
(1, 'Iniciante'),
(2, 'Intermediário'),
(3, 'Experiente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `cnpj` char(14) NOT NULL,
  `responsavel` varchar(120) NOT NULL,
  `tipo_perfil` char(1) NOT NULL DEFAULT 'N',
  `status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE `pergunta` (
  `id` int(10) UNSIGNED NOT NULL,
  `enunciado` varchar(500) NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `assunto_id` int(10) UNSIGNED NOT NULL,
  `dificuldade_id` int(10) UNSIGNED NOT NULL,
  `autor_id` int(10) UNSIGNED NOT NULL,
  `url_enunciado` varchar(120) DEFAULT NULL,
  `url_imagem` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pergunta`
--

INSERT INTO `pergunta` (`id`, `enunciado`, `categoria_id`, `assunto_id`, `dificuldade_id`, `autor_id`, `url_enunciado`, `url_imagem`) VALUES
(1, 'Considere o seguinte trecho de código PHP.\r\n\r\n<?php\r\n$bin = sprintf( \" % 08d\", decbin( 26 ));\r\necho $bin;\r\n?>\r\n\r\nO código acima, ao ser executado em condições ideais, resulta em ', 1, 7, 2, 1, NULL, NULL),
(2, 'Em PHP, um Técnico criou um array utilizando o comando abaixo.\r\n\r\n$processos = array(\r\n    \"Paulo\"=>\"2000.01.1.000001-5\",\r\n    \"Maria\"=>\"2017.01.1.000002-4\",\r\n    \"André\"=>\"2014.01.1.000001-4\"\r\n);\r\n\r\nApós este comando, criou um laço de repetição que exibiu os dados da seguinte forma: \r\n\r\nNome=Paulo, Número do Processo=2000.01.1.000001-5\r\nNome=Maria, Número do Processo=2017.01.1.000002-4\r\nNome=André, Número do Processo=2014.01.1.000001-4\r\n\r\nA estrutura do laço de repetição criado foi: \r\n\r\n..I.. {', 1, 7, 2, 1, NULL, NULL),
(3, 'Considere o fragmento de código abaixo, em um ambiente PHP em condições ideais.\r\n\r\n\r\n<?php\r\n\r\n    $dbh = new PDO(\'odbc:dados\', \'rod167\', \'a4BCz98\');\r\n\r\n    $linhas = ..I.. (\"DELETE FROM dpers WHERE processo = \'1234567\'\");\r\n\r\n    print(\"$linhas linhas deletadas.\\n\");\r\n\r\n?>', 1, 7, 3, 1, NULL, NULL),
(4, 'Considere o seguinte código PHP:\r\n\r\n<?php\r\n       function calc(&$var)\r\n       {\r\n              $var++;\r\n        }\r\n        $a=5;\r\n        calc($a);\r\n        $a+=5;\r\n        echo $a;\r\n?>\r\n\r\nAo executar o código, o valor exibido será \r\n', 1, 7, 2, 1, NULL, NULL),
(5, 'A respeito da declaração de variáveis na linguagem de programação PHP, assinale a opção correta.', 1, 7, 1, 1, NULL, NULL),
(6, 'Em relação ao modelo de Classes e Objetos do PHP a partir da versão 5, é correto afirmar: ', 1, 7, 3, 1, NULL, NULL),
(7, 'Com relação à declaração de funções no PHP 5.2.3 ou superior, é correto afirmar: ', 1, 7, 2, 1, NULL, NULL),
(8, 'Em PHP, variáveis superglobais são variáveis nativas que estão sempre disponíveis em todos os escopos.\r\nA variável superglobal que contém informação sobre cabeçalhos, paths e localizações do script é: ', 1, 7, 1, 1, NULL, NULL),
(9, 'Como é denominado em PHP e em outras linguagens orientadas a objetos, o recurso que permite que dois métodos dentro de uma classe tenham o mesmo nome?', 1, 7, 1, 1, NULL, NULL),
(10, 'Qual função em PHP deveria ser utilizada para se retornar um número com o tamanho de uma string?', 1, 7, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta_questionario`
--

CREATE TABLE `pergunta_questionario` (
  `questionario_id` int(10) UNSIGNED NOT NULL,
  `pergunta_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `area_atuacao` varchar(120) DEFAULT NULL,
  `cpf` char(11) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questionario`
--

CREATE TABLE `questionario` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `descricao` varchar(120) DEFAULT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `assunto_id` int(10) UNSIGNED NOT NULL,
  `tempo` double DEFAULT NULL,
  `autor_id` int(10) UNSIGNED NOT NULL,
  `dt_cad` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ind_status` char(1) NOT NULL DEFAULT 'A',
  `tipo` char(1) NOT NULL DEFAULT 'A',
  `dificuldade` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questionario_turma`
--

CREATE TABLE `questionario_turma` (
  `turma_id` int(10) UNSIGNED NOT NULL,
  `questionario_id` int(10) UNSIGNED NOT NULL,
  `dt_ini` datetime NOT NULL,
  `dt_fim` datetime DEFAULT NULL,
  `ind_status` char(1) NOT NULL DEFAULT 'A',
  `premio` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questionario_vaga`
--

CREATE TABLE `questionario_vaga` (
  `vaga_id` int(10) UNSIGNED NOT NULL,
  `questionario_id` int(10) UNSIGNED NOT NULL,
  `dt_ini` datetime DEFAULT NULL,
  `dt_fim` int(10) UNSIGNED NOT NULL,
  `ind_status` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `premio` varchar(320) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta_questionario`
--

CREATE TABLE `resposta_questionario` (
  `id` int(10) UNSIGNED NOT NULL,
  `resultado_id` int(10) UNSIGNED NOT NULL,
  `pergunta_id` int(10) UNSIGNED NOT NULL,
  `alternativa_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultado`
--

CREATE TABLE `resultado` (
  `id` int(10) UNSIGNED NOT NULL,
  `questionario_id` int(10) UNSIGNED NOT NULL,
  `aluno_id` int(10) UNSIGNED NOT NULL,
  `tipo` char(1) NOT NULL,
  `acertos` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `erros` int(10) DEFAULT '0',
  `pontuacao` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tempo_gasto` double NOT NULL DEFAULT '0',
  `dt_exec` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id` int(10) UNSIGNED NOT NULL,
  `autor_id` int(10) UNSIGNED NOT NULL,
  `dt_cad` datetime NOT NULL,
  `ind_status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(120) NOT NULL,
  `celular` char(15) NOT NULL,
  `telefone` char(15) DEFAULT NULL,
  `email` varchar(120) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `tipo` char(1) NOT NULL,
  `senha_tmp` varchar(120) DEFAULT NULL,
  `ind_status` char(1) NOT NULL DEFAULT 'A',
  `dt_cad` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ult_alt_senha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `Nome`, `celular`, `telefone`, `email`, `login`, `senha`, `tipo`, `senha_tmp`, `ind_status`, `dt_cad`, `ult_alt_senha`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@admin', 'admin', 'admin', 'S', NULL, 'A', '2017-11-05 19:10:20', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE `vaga` (
  `id` int(10) UNSIGNED NOT NULL,
  `empresa_id` int(10) UNSIGNED NOT NULL,
  `questionario_id` int(10) UNSIGNED DEFAULT NULL,
  `descricao` varchar(320) NOT NULL,
  `dt_cad` datetime NOT NULL,
  `ind_status` char(1) NOT NULL DEFAULT 'A',
  `dt_fim` datetime DEFAULT NULL,
  `dt_ini` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acesso_questionario`
--
ALTER TABLE `acesso_questionario`
  ADD PRIMARY KEY (`id`,`questionario_id`,`usuario_id`) USING BTREE,
  ADD KEY `fk_acesso_usuario` (`usuario_id`),
  ADD KEY `fk_acesso_questionario` (`questionario_id`);

--
-- Indexes for table `alternativa`
--
ALTER TABLE `alternativa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_alt_pergunta` (`pergunta_id`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `aluno_turma`
--
ALTER TABLE `aluno_turma`
  ADD PRIMARY KEY (`usuario_id`,`turma_id`),
  ADD KEY `fk_alutur_turma_id` (`turma_id`);

--
-- Indexes for table `assunto`
--
ALTER TABLE `assunto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_assunto_cat` (`categoria_id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `convite_turma`
--
ALTER TABLE `convite_turma`
  ADD PRIMARY KEY (`id`,`aluno_id`,`turma_id`) USING BTREE,
  ADD KEY `fk_ct_aluno` (`aluno_id`),
  ADD KEY `fk_ct_professor` (`professor_id`),
  ADD KEY `fk_ct_turma` (`turma_id`);

--
-- Indexes for table `dificuldade`
--
ALTER TABLE `dificuldade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `cnpj` (`cnpj`);

--
-- Indexes for table `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pergunta_autor` (`autor_id`),
  ADD KEY `fk_pergunta_dificuldade` (`dificuldade_id`);

--
-- Indexes for table `pergunta_questionario`
--
ALTER TABLE `pergunta_questionario`
  ADD PRIMARY KEY (`questionario_id`,`pergunta_id`),
  ADD KEY `fk_pergunta` (`pergunta_id`,`questionario_id`) USING BTREE;

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `questionario`
--
ALTER TABLE `questionario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_autor` (`autor_id`);

--
-- Indexes for table `questionario_turma`
--
ALTER TABLE `questionario_turma`
  ADD PRIMARY KEY (`turma_id`,`questionario_id`),
  ADD KEY `fk_qt_q_id` (`questionario_id`,`turma_id`) USING BTREE;

--
-- Indexes for table `questionario_vaga`
--
ALTER TABLE `questionario_vaga`
  ADD PRIMARY KEY (`vaga_id`,`questionario_id`),
  ADD KEY `fk_vaga_q_id` (`questionario_id`);

--
-- Indexes for table `resposta_questionario`
--
ALTER TABLE `resposta_questionario`
  ADD PRIMARY KEY (`id`,`pergunta_id`,`resultado_id`) USING BTREE,
  ADD KEY `fk_rq_perg_id` (`pergunta_id`),
  ADD KEY `fk_rq_alternativa_id` (`alternativa_id`),
  ADD KEY `fk_rq_result_id` (`resultado_id`);

--
-- Indexes for table `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_res_qt_id` (`questionario_id`),
  ADD KEY `fk_res_alu_id` (`aluno_id`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tur_autor` (`autor_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vaga_emp_id` (`empresa_id`),
  ADD KEY `fk_vaga_qt_id` (`questionario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acesso_questionario`
--
ALTER TABLE `acesso_questionario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `alternativa`
--
ALTER TABLE `alternativa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `assunto`
--
ALTER TABLE `assunto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `convite_turma`
--
ALTER TABLE `convite_turma`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dificuldade`
--
ALTER TABLE `dificuldade`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `questionario`
--
ALTER TABLE `questionario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resultado`
--
ALTER TABLE `resultado`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acesso_questionario`
--
ALTER TABLE `acesso_questionario`
  ADD CONSTRAINT `fk_acesso_questionario` FOREIGN KEY (`questionario_id`) REFERENCES `questionario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_acesso_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `fk_aluno` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `aluno_turma`
--
ALTER TABLE `aluno_turma`
  ADD CONSTRAINT `fk_alutur_turma_id` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_alutur_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `assunto`
--
ALTER TABLE `assunto`
  ADD CONSTRAINT `fk_assunto_cat` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `convite_turma`
--
ALTER TABLE `convite_turma`
  ADD CONSTRAINT `fk_ct_aluno` FOREIGN KEY (`aluno_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ct_professor` FOREIGN KEY (`professor_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ct_turma` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `fk_empresa` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `pergunta`
--
ALTER TABLE `pergunta`
  ADD CONSTRAINT `fk_pergunta_autor` FOREIGN KEY (`autor_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pergunta_dificuldade` FOREIGN KEY (`dificuldade_id`) REFERENCES `dificuldade` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `pergunta_questionario`
--
ALTER TABLE `pergunta_questionario`
  ADD CONSTRAINT `fk_pergunta` FOREIGN KEY (`pergunta_id`) REFERENCES `pergunta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_questionario` FOREIGN KEY (`questionario_id`) REFERENCES `questionario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `fk_professor` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `questionario`
--
ALTER TABLE `questionario`
  ADD CONSTRAINT `fk_autor` FOREIGN KEY (`autor_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `questionario_turma`
--
ALTER TABLE `questionario_turma`
  ADD CONSTRAINT `fk_qt_q_id` FOREIGN KEY (`questionario_id`) REFERENCES `questionario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_qt_t_id` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `questionario_vaga`
--
ALTER TABLE `questionario_vaga`
  ADD CONSTRAINT `fk_vaga_id` FOREIGN KEY (`vaga_id`) REFERENCES `vaga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_vaga_q_id` FOREIGN KEY (`questionario_id`) REFERENCES `questionario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `resposta_questionario`
--
ALTER TABLE `resposta_questionario`
  ADD CONSTRAINT `fk_rq_alternativa_id` FOREIGN KEY (`alternativa_id`) REFERENCES `alternativa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rq_perg_id` FOREIGN KEY (`pergunta_id`) REFERENCES `pergunta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rq_result_id` FOREIGN KEY (`resultado_id`) REFERENCES `resultado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `fk_res_alu_id` FOREIGN KEY (`aluno_id`) REFERENCES `aluno` (`usuario_id`),
  ADD CONSTRAINT `fk_res_qt_id` FOREIGN KEY (`questionario_id`) REFERENCES `questionario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `fk_tur_autor` FOREIGN KEY (`autor_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `vaga`
--
ALTER TABLE `vaga`
  ADD CONSTRAINT `fk_vaga_emp_id` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`usuario_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_vaga_qt_id` FOREIGN KEY (`questionario_id`) REFERENCES `questionario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
