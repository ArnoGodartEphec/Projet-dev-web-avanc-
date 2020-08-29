--
-- Database: arno
--

-- --------------------------------------------------------

--
-- Table structure for table recette
--
CREATE TABLE recette (
  id int(11) NOT NULL,
  nom varchar(255) DEFAULT NULL,
  titre varchar(255) DEFAULT NULL,
  description text,
  id_user int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table users
--

CREATE TABLE users (
  id int(11) NOT NULL,
  username varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  password varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table recette
--
ALTER TABLE recette
  ADD PRIMARY KEY (id),
  ADD KEY id_user (id_user);

--
-- Indexes for table users
--
ALTER TABLE users
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table recette
--
ALTER TABLE recette
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table users
--
ALTER TABLE users
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table recette
--
ALTER TABLE recette
  ADD CONSTRAINT recette_ibfk_1 FOREIGN KEY (id_user) REFERENCES users (id);