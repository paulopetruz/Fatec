CREATE Database `escola`;

CREATE TABLE `alunos`(
    `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    `Nome` varchar(200) NOT NULL,
    `curso` varchar(100) NOT NULL,
    `CPF` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

