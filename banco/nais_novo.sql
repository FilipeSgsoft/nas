-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Dez-2018 às 02:21
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nais`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_estagiario` int(11) NOT NULL,
  `data_agenda` datetime NOT NULL,
  `motivo` text NOT NULL,
  `relatorio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `id` float NOT NULL,
  `id_pai` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `modulo` varchar(255) NOT NULL,
  `view` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`id`, `id_pai`, `nome`, `modulo`, `view`, `status`) VALUES
(1, 0, 'Cadastrar', 'NULL', 'NULL', 1),
(1.1, 1, 'Cadastrar Paciente', 'Recepcao', 'CadastrarPaciente', 1),
(1.2, 1, 'Avaliação Fisioteraupêutica', 'Recepcao', 'AvaliacaoFisioterapeutica', 1),
(1.3, 1, 'Avaliação Neurologica', 'Recepcao', 'AvaliacaoNeurologica', 1),
(1.4, 1, 'Avaliação Neuroppediátrica', 'Recepcao', 'AvaliacaoNeuropediatrica', 1),
(1.5, 1, 'Avaliação Oncológica', 'Recepcao', 'AvaliacaoOncologica', 1),
(1.6, 1, 'Avaliação Ortopédica', 'Recepcao', 'AvaliacaoOrtopedica', 1),
(2, 0, 'Atendimento Médico', 'Medico', 'Atendimento', 1),
(3, 0, 'Agendar Paciente', 'Recepcao', 'AgendarPaciente', 1),
(4, 0, 'Atender Paciente', 'Estagiario', 'AtenderPaciente', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `idade` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id`, `nome`, `status`) VALUES
(1, 'Médico', 1),
(2, 'Recepcionista', 1),
(3, 'Estagiário', 1),
(4, 'Cliente', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil_menu`
--

CREATE TABLE `perfil_menu` (
  `id` int(11) NOT NULL,
  `id_perfil` varchar(255) NOT NULL,
  `id_menu` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil_menu`
--

INSERT INTO `perfil_menu` (`id`, `id_perfil`, `id_menu`) VALUES
(1, '2', 1),
(2, '2', 1.2),
(3, '2', 1.1),
(4, '2', 1.3),
(5, '2', 1.4),
(6, '2', 1.5),
(7, '2', 1.6),
(8, '1', 2),
(9, '2', 3),
(10, '3', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `senha`, `nome`) VALUES
(1, 'fribeiro', '123', 'Filipe Ribeiro Brito'),
(2, 'drodrigues', '123', 'Davi Rodrigues'),
(3, 'ivirgilio', '123', 'Iago Virgilio'),
(4, 'rvenas', '123', 'Rogerio Venas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_perfil`
--

CREATE TABLE `usuario_perfil` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario_perfil`
--

INSERT INTO `usuario_perfil` (`id`, `id_usuario`, `id_perfil`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perfil_menu`
--
ALTER TABLE `perfil_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario_perfil`
--
ALTER TABLE `usuario_perfil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` float NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `perfil_menu`
--
ALTER TABLE `perfil_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuario_perfil`
--
ALTER TABLE `usuario_perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
