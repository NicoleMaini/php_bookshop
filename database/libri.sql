-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 03:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestione_libreria`
--

-- --------------------------------------------------------

--
-- Table structure for table `libri`
--

CREATE TABLE `libri` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(250) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(25) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `genre` varchar(20) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `libri`
--

INSERT INTO `libri` (`id`, `img`, `title`, `author`, `year`, `genre`, `description`) VALUES
(4, 'https://www.ibs.it/images/9788893905831_0_536_0_75.jpg', 'Dalla stessa parte mi troverai', 'Valentina Mira', 2024, 'Contemporanea', 'Questa storia comincia una sera d’inverno, il 7 gennaio 1978. Davanti a una sede del Movimento sociale italiano nel quartiere Appio Latino, a Roma, vengono uccisi a colpi d’arma da fuoco due attivisti di destra. Da quel momento, i morti di Acca Larentia diventano icone intoccabili del neofascismo. Questa storia ricomincia il 30 aprile 1987, quando viene arrestato Mario Scrocca, un militante di estrema sinistra. Secondo gli inquirenti, Scrocca avrebbe fatto parte del commando che colpì ad Acca La'),
(5, 'https://www.ibs.it/images/9791259675965_0_536_0_75.jpg', 'Spietate promesse', 'Rebecca Ross', 2024, 'Romance', 'Dopo aver vissuto in prima persona gli orrori della guerra, Iris è finalmente tornata a casa, ma la vita lontano dal fronte è tutt’altro che facile: Roman è disperso e non si hanno sue notizie da settimane, l’esercito di Dacre continua ad avanzare puntando verso Oath, mentre i suoi abitanti, ostili e diffidenti nei confronti delle divinità, sono sempre più inferociti. Quando a Iris e Attie viene offerta la possibilità di tornare a seguire l’offensiva in prima linea, le due non esitano a dirigers'),
(6, 'https://www.ibs.it/images/9788828214571_0_536_0_75.jpg', 'Giovinezza. La guerra e la prigionia di una genera', 'Giuliano Giubilei', 2024, 'Storico', 'Sangue, morte, prigionia: è il calvario a cui Mussolini condanna milioni di giovani italiani, sequestrando la loro giovinezza. Negli anni Quaranta la famiglia Monteschi ha i suoi figli maschi al fronte. Sono quattro, sono nati all’indomani della Prima guerra mondiale e cresciuti sotto il fascismo. E si ritrovano a marciare nel deserto libico dopo dure battaglie con gli inglesi. Oppure a marcire nel fango e nella neve, sulle montagne albanesi, con mezzi scarsi e antiquati di fronte a un nemico be'),
(11, 'https://www.ibs.it/images/9788834617021_0_536_0_75.jpg', 'Un animale selvaggio', 'Joël Dicker', 2024, 'Thriller', '2 luglio 2022, due ladri rapinano una importante gioielleria di Ginevra. Ma questo non sarà un colpo come tutti gli altri. Venti giorni prima, in un elegante sobborgo sulle rive del lago, Sophie Braun sta per festeggiare il suo quarantesimo compleanno. La vita le sorride, abita con il marito Arpad e i due figli in una magnifica villa al limitare del bosco. Sono entrambi ricchi, belli, felici. Ma il loro mondo idilliaco all’improvviso s’incrina. I segreti che custodiscono cominciano a essere trop'),
(12, 'https://www.ibs.it/images/9791256210091_0_536_0_75.jpg', 'Quando muori resta a me', 'Zerocalcare', 2024, 'Fumetti', 'Un viaggio con suo padre verso il paesino tra le Dolomiti da cui proviene la famiglia paterna sarebbe la scusa perfetta per capire meglio Genitore 2, ma Zerocalcare e suo padre sono incapaci di parlarsi di cose significative. Questo rende difficile la trasferta, quando si capisce che la loro famiglia non è vista di buon occhio, anzi, da alcuni è proprio odiata, in paese. Le radici dell\'odio risalgono a prima della Grande guerra, e si intrecciano al mistero che circonda, da trentacinque anni, il '),
(13, 'https://www.ibs.it/images/2000000124414_0_536_0_75.jpg', 'La vedova ', 'José Saramago', 2024, 'Contemporanea', 'In seguito alla morte del marito, Maria Leonor, madre di due figli, è sopraffatta dalla difficile gestione della fattoria di famiglia in Alentejo e dallo stretto controllo del suo ambiente. Dopo mesi di profonda depressione decide di affrontare i suoi doveri di proprietaria terriera, ma il suo cuore continua a essere tormentato da un desiderio inestinguibile. Tra riflessioni sull\'essenza dell\'amore, sullo scorrere del tempo e sulle stupefacenti mutazioni della natura, la giovane vedova trascorre'),
(14, 'https://www.ibs.it/images/9788811011743_0_536_0_75.jpg', 'Una vita non basta', 'Enrico Galiano', 2024, 'Young Adult', '\r\n«Quando desideri tanto qualcosa, fai come il colibrì: non aver paura di cadere. Anzi, impara a farlo a tutta velocità, per poi risalire.» Questa volta, però, a Teo sembra impossibile risalire: è stato bocciato in seconda liceo, ma soprattutto ha fatto qualcosa di davvero sbagliato, e ora dovrà scontare un’estate di lavori socialmente utili. Sa che è una punizione giusta, eppure c’è qualcosa dentro di lui che non riesce a tenere a bada. Teo la chiama la Cosa proprio perché non è in grado di dar'),
(15, 'https://www.ibs.it/images/2000000124636_0_536_0_75.jpg', 'I miei giorni alla libreria Morisaki', 'Satoshi Yagisawa', 2024, 'Young Adult', 'Jinbōchō, Tokyo. Il quartiere delle librerie e delle case editrici, paradiso dei lettori. Un angolo tranquillo e fuori dal tempo, a pochi passi dalla metropolitana e dai grandi palazzi moderni. File e file di vetrine stipate all\'inverosimile di libri, nuovi o di seconda mano. Non tutti lo conoscono, più attratti da Ginza o dalle mille luci di Shibuya. Di sicuro Tatako – venticinquenne dalla vita piuttosto incolore – non lo frequenta assiduamente. Eppure è qui che si trova la libreria Morisaki, c'),
(16, 'https://www.ibs.it/images/2000000124810_0_536_0_75.jpg', 'Lo sguardo di Medusa', ' Natalie Haynes', 2024, 'Mitologia', 'Medusa è l’unica mortale in una famiglia di déi. Crescendo insieme alle sorelle, Steno ed Euriale, presto si rende conto che è la sola a essere vulnerabile, accudita proprio per via della sua fragilità e della sua straordinaria bellezza. Questo la rende sensibile, piena di una compassione che gli immortali faticano a comprendere e desiderano annientare. Quando la bramosia spinge Poseidone a commettere un atto imperdonabile, la vita di Medusa viene sconvolta per sempre: Atena, oltraggiata e gelos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `libri`
--
ALTER TABLE `libri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `libri`
--
ALTER TABLE `libri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
