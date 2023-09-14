-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 11, 2023 at 08:47 PM
-- Server version: 8.0.34-0ubuntu0.20.04.1
-- PHP Version: 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printf`
--

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

CREATE TABLE `api` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `token` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `api`
--

INSERT INTO `api` (`id`, `user_id`, `token`) VALUES
(4, 2, 'CqujBpkzLtpiQuhtFgskHoreTxfiRlvuHezrKjtw'),
(5, 2, 'BqlanguaSskblkxaJmdhopxhBnfcyfemHdhqwczg'),
(6, 2, 'RvkdnoksIjkjoxeaFtivazmvRrzeiigxZigeyene'),
(7, 2, 'DwcqgRvagdOlrrrTrqqqCcxxoImximDoygnKfzgz'),
(8, 2, 'UptkmzfVqmkwfuHftkqefBdwpktlGhcysgrYgzjf'),
(9, 2, 'McyXodEcxMhiFypMjcAmaAjoLtcNulVpsXztGljI'),
(10, 2, 'PvjlsfdlfLyovlpyvkKphuarnxeEelbcoaroFjfj'),
(11, 2, 'QvoqndpxlNvmdacapdIytgzfsdaXatlqyjrsLtbx'),
(12, 2, 'AygjiecrYpldpiyuJkbnjcmoHcqfrscwFbasqbne'),
(13, 2, 'GhwkdifpcKdlluzsjgZyzrbzgqmHtbajldbzWejw'),
(14, 2, 'HrntvumbJoceibydLusidikbMrefbcbyUjhokxjn'),
(20, 2, 'VfoYamCaeTgnHdjZqpNmgCgqYvsHpaOujHlfQfjJ'),
(21, 4, 'VaqUlcDhaIdvKrgLrtPxfQzaCtuViyQabTfgQuiU'),
(24, 2, 'HduxBjbnZvnyEivuKjszMxgjXhnzThliQjmmNvjr'),
(33, 17, 'XjbiywfjuKqpgplkdaTjuuhvkkoZlkhymkssGflz'),
(34, 2, 'FakxOolyHmznMpawXtzgLegfAtfpBrkqSmmuEqzp'),
(35, 2, 'ChrdgVvcmeHdnyyCaztyPjnttRmfeeSuwgzQlesh'),
(36, 4, 'OwoQarYafJukNywMsrNopLehTfaLeqHwkAjqKfnP'),
(37, 2, 'IcusmtfjJotumvibIvvuynydFuhjqlccTetyxgxz'),
(38, 2, 'SyihKdavKmerMgbuNgmwTkwoQyxjKvihRvrqBlwh'),
(39, 2, 'QzuquaiUgimwkuIadtudpGkxzmzlPrtsxxrXfsgp'),
(40, 2, 'VrqimjakwEmxnhycqvTmjtypzyrDkdwhrmpsGwif'),
(41, 2, 'UimarcHxihazUlxkiaFthrzmSugpiwPbxzpaCttr'),
(43, 4, 'HbokAgdbObteNxgaXnodVtubRlldQganPoeqShhq'),
(44, 2, 'VzphnqqyYmxhcjkaStrzquidIapletclFcpobydu'),
(45, 2, 'XcwolKwifsRhdrmIcpcoQfyeiZkcbkKghroXiqnw'),
(46, 2, 'RlkmBgodFjngQgrgOmctKzmlRstuSqulYbfvRwfo'),
(48, 17, 'VpzeqyzgUwgvvkrkVrlgmqeaHzbzotmwApsjxidm'),
(49, 2, 'BxpchlHxbdwhKelumiBkaibgOdxpdaRbbhipFlgq'),
(50, 2, 'KnbbpwCpfyvwMkhmheOrcqbvJtbmzeSlpdloUdhz'),
(51, 17, 'HnwjjkJcnafxUictinCmodayRibwlbRtorlsRuje'),
(52, 2, 'NjbzbqvudYzdrdrlvoXdrmxdhrkJrggfegbwMqvl'),
(54, 2, 'LkyihIohqsSmcveLrwhpDuunqWxxzmAxzeqTqlmj'),
(56, 2, 'DlazfgmdSzynyrpgSeseapyjQiyltzdrTsvekkfg'),
(57, 2, 'GbfilzpSplphjjMgqzalgRbegvlpUbhanckJwtyg'),
(58, 2, 'NigjnlhvExdbkwoiRmcurpswNdcsanwjMgbakqtd'),
(59, 2, 'ImlkIfzeLrksCbvqFafjSaaqSmipGzstBxuyFgcf'),
(60, 2, 'NagkmZepnnPinjdTslbyKzursJgxbwIdiyqEfefk'),
(61, 2, 'BedwnwkfYcyrhpthHswyjslaIrjskaklPcwarxke'),
(62, 2, 'VjipGmivTtxeFevbKuieTeymUxfiVovzBfyiOswg'),
(63, 2, 'LouowdCylfstJcplqsAhzlfyOkgdfnHiiczzEwpy'),
(64, 2, 'HlqlkmlmUizmedbjAkfgnjmvRupdmskpJaokpxci'),
(65, 2, 'HxtrfgQutgshUbzgbzYbeyfzLwmytkGphdhtYjbj'),
(66, 2, 'YwzggktXtmopszIijjarqOirpnimTnuabxeCtgqh'),
(67, 2, 'AwqmfGillhOubruKmyswJsopuRekzyHwekqTyyvf'),
(68, 2, 'BomtZandVoulJdujMhzkWgjsWuvhWnhfEudzAspf'),
(69, 2, 'FcngdhgPuwjqovOsalwprEwxnrnfUfpprirRfwxc'),
(70, 2, 'OuzzhaiVotcqsoXtuoojwMgpojtaIpmuxblWyghl'),
(71, 2, 'XykujmdquGdoeybwoeLrvstzjvhTskhibsfvRqyp'),
(72, 2, 'ExszxmGdsbnyKnvigdVzkcppGtpgbgAekrsqNzoj'),
(73, 2, 'QrudIoqsMghbHukwEybxNalnVdxmFcskGelyBbva'),
(74, 2, 'DrsOlzSlgGwaExgQubIrgGroQzjXurHkkVjmXkoR'),
(75, 2, 'QsxytUnjvhPwvnnYtbztVflpzDetdwXjgvsYtsfq'),
(76, 2, 'IinqdopTkpheisIejlsquRfnfkvvJrwjkqcUmpap'),
(77, 2, 'YqiwudeTydslhfGmnrehoPurmkzrMcbbuxjTxtkz'),
(78, 2, 'FgwfpqkjDqqgggegDkimpjajEjmuptrhUgxjvdwu'),
(79, 2, 'PbzsxVcfekHtpldUcyrnObezpXkcouXgstyXkfpt'),
(80, 2, 'TncQpjVynJmcPiwToqDqtFpmXryQmkUioGefVdlP'),
(81, 2, 'WdognzknFvageotcLtjbxznxHkgnagfnThiivasv'),
(82, 2, 'JqostLbbahLsrwhCcavcHyxtpCyzuxYyrqmQwqzq'),
(83, 2, 'KqrQqrTeuJmgEvwIzvQypLevJqrCedLhuLkgNvoH'),
(84, 2, 'NwrpftGpewkgYqikctKksctkFeljnfFlyidwTrlp'),
(85, 2, 'YqajgyzjnArkeqqrghZnqnfqwsdFmzvyrkrxPqzb'),
(86, 2, 'YwnscyMfjjavVlxbowWgbtvvIrfzyvPuwfvhNabj'),
(87, 2, 'CqtwQyauFkjoVzpeSuynOfklEplrBxncCsonAqzc'),
(88, 2, 'XuknovwuTealwhgjGxgwjqzmVoujidhdWvkixyxk'),
(90, 2, 'PenirrBkhalsEzcyzeCvmdpqXzekoxLuaylxFmxm'),
(91, 2, 'JvqxyphWlmiygvDpvfdawWkabiltOjjisqzLedeu'),
(92, 2, 'ZlmGqpZnhPrbUjyXecMpvActXefQdwNekPoxQtaL'),
(93, 2, 'TocOswPqgKboRzaTraXziNzmRsgCliEanCvdSenK'),
(94, 2, 'FddjyoxFthxngsOgvebexRstztgqVfupdooXgtkh'),
(95, 2, 'SiocfJpqolJjqcaOgvjmEyjatXaqjaPigutLatkf'),
(96, 2, 'LbcodpxtNqsgurvgGhfeflpiOezmzawgDlyqbyxt'),
(97, 2, 'LurmkkPhdtedVfoabaRokcqmEqkbbxOcdmpbVimx'),
(98, 2, 'ZdntzwbhmLaehxrvfkKgbrxlknoCxxnqgqhnByxx'),
(99, 2, 'PqmUcrFkdBcpNanBxuNjpErxDcnSmmDgmImjXmbH'),
(100, 2, 'ToyfzwoZzvfwxmQjqwmdnNtsyqplRgxhbjvWqsqt'),
(101, 2, 'CpkeqsxLafiupdWibhzkyDyhgofyDcskheeTgtvj'),
(102, 2, 'LhiupjnasSgsrxsasbHxwqzrmfkIgkabrezdNdqv'),
(104, 2, 'EdpyggqbCmiokwyhNwjhwwloAqzhvalqSbmlrqdu'),
(105, 2, 'QataLylaZemmPtvuJruvPakcNadeLlhpHaeePvsk'),
(106, 2, 'ZdxKusAaxQduBbcIbjDqiKjtTdfBcrHllAxcKlpY'),
(107, 2, 'XgmpsGumunFpmulUijquFetfyTipdfNlwyiIakkr'),
(108, 2, 'UuvuuktmqAngzwgevjQdujydjqiBgldukrnyXxrs'),
(109, 2, 'AafyxkbqLymbpmiwPsoiiuklIwqxjhheLzalbaio'),
(110, 2, 'JgmCdhCboVcoSdvBddSpaQxaXbfDyyQruKvkDzhC'),
(111, 2, 'ZlopnzczaHssenoksoPrplloaruCmfzzzmsaErlf'),
(112, 2, 'BlykuduBsnufqoZwsrjnqMogfntlUcbsjsbBvrby'),
(113, 2, 'EkhIfgYleKrdDqaJgqOmsAkbCwmSwpCbsJejElnD'),
(118, 2, 'LwadbaamsUikzqdvtsZruhetvlpTgmjrfjwzGapg'),
(119, 2, 'FvznriggoVgwccqyayLdkelsjdrYhimkirguFeki'),
(120, 2, 'QgfkihjsNkbqwmmmVodnvypeCxklfqnvQejwljvn'),
(121, 2, 'LtcwZgrrJoffKanyAuhlDpgtVsueOkdiLaydXhfc'),
(122, 2, 'IychwtomSbkbazncAigudtdbJhekglioTnaqeusz'),
(123, 2, 'IuvovTntxjGarwiKyfpbKxqarLpvrpZpqvtTfidl'),
(124, 2, 'OxgwzRlztzLxzehUdoxiBxawiHidcsCtfhtKjcez'),
(125, 2, 'WzbpYxfpQqkyVbnzRcinSgvtEwjoWnycHvuhPzzr'),
(126, 2, 'ViyQjeAqxIorHnkCfjUtgPhaEpqKrgZcyNudTmoD'),
(127, 2, 'UyqaaagkyXinhwwvkoRritisdpqDbsbgqrshAlaj'),
(128, 2, 'OgmhmpqhVpuohwsaPkgdwhtaFmftxvrkNziksdss'),
(129, 2, 'KjbLrtXivCufGqfKnfSxvJmxKntSmmEtoXvyKfvX'),
(130, 2, 'SrdnkcWghqdwDocwgsYryhreMacuxvKvxnzkHttf'),
(131, 2, 'EikdijxHbmjoqpZxeptpoRkerojaMafiqwqGtzjn'),
(133, 2, 'VnnmganwYhbdzqajWxqeycyuHsrkozbyJsjnwfzh'),
(134, 2, 'IzqsggyBuuyzsxUndqvwcBwcnbgyTfjlpfpAvtax'),
(135, 2, 'OzjbxdrApizkuoAvdgwlxTtccgrwOokgvnoWojxz'),
(136, 2, 'DdqvaWflomPhvxlOfbjcRjkxgWeamxCflpbBtsqn'),
(137, 2, 'GnxdCxqbHjotZqgyQyaiRwzmJmcxGgtrNqswLgvn'),
(138, 2, 'HbdvogKsgolvEbpbzjTmjsbkLtwkmuZiggokTeqb'),
(139, 2, 'JmfilnCdatpmLtkuaxHujbbkCynxngKnqrpcXlym'),
(140, 2, 'XmyxdbftKrmtiwnyLppqbkrfSxdgpmcrArwwxwtw'),
(141, 2, 'YwjRaoWpvUwmWqmOdlVvsYmuCvaJqrFqlOjeFohM'),
(142, 2, 'SjmlumqfCenswgcwLuapqtjlAqbelvuxAvjbxgrx'),
(143, 2, 'QlexkpwQdokxroCrpgffdMugwrjwTdxkfutYjbhx'),
(144, 2, 'SbexpwsdyWqapjkirsYnvqlwwbjBtnxlmwewGzsb'),
(145, 2, 'HvvodgndBtocyggxAxdlanglIkqgbzuaEnzouahq'),
(146, 2, 'SbrGdqPorDieZbtSesFqwIsyOgjJomQszYfpLswM'),
(147, 2, 'LldeeAveqoYgnfnIhopyHswraHlzsdDqatmTeixa'),
(153, 2, 'GleetItmopFurkpTfhpfGahumBchnnJxqtdDqrmy'),
(154, 2, 'GbzlLqsbGxfqLrfmNzmsYnlnUtliFqnyJshsAipj'),
(155, 2, 'ZankrfofdJygdacluzTuuqhwffsMejjncnfpNwaa'),
(156, 2, 'BxvNbxJubVcsFyzGawEjcLleFynLnxRzvEskIcvS'),
(157, 2, 'AepfijecxPfeggaamrArmqntlfsFcisnrmnaMsds'),
(158, 2, 'PvkkbfawmQlaheqrldOdlcoeqcbOusxhevgsPrbi'),
(159, 2, 'AynvcSsvvvOspjcZjvccMbtdjGyvmiVtygoJzjbm'),
(160, 2, 'JaxvGbdsLpxwTcuuQotlRecwZvuzSoewLkmmKlyk'),
(161, 2, 'WdxfxbUistjuAfnmifTuuqooSzrfoeOearzpGvha'),
(167, 17, 'RuocrkcxKrfgqokkUfwjrydfLsxsskdlFsbnvhdc'),
(168, 2, 'JziefbnmNqxoacjgDcsifddtBkozaifwXvolrhlk');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `event_id` int NOT NULL,
  `comment` text NOT NULL,
  `post_time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `event_id`, `comment`, `post_time`) VALUES
(31, 17, 116, 'Teszt comment', '2023-09-11 17:06:37'),
(32, 2, 116, 'Teszt', '2023-09-11 17:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int NOT NULL,
  `user_id` int NOT NULL,
  `event_type` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `event_status` enum('public','private') CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `event_name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `event_location` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `event_street` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `event_active` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT 'inactive',
  `reminder_sent` enum('true','false') COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT 'false',
  `event_start` datetime DEFAULT NULL,
  `event_close` datetime DEFAULT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `user_id`, `event_type`, `event_status`, `event_name`, `event_location`, `event_street`, `event_active`, `reminder_sent`, `event_start`, `event_close`, `date_time`) VALUES
(115, 4, 'TesztCronMost12', 'public', 'TesztCronMost', 'Paris, France', 'Eiffel tower', 'active', 'true', '2023-09-10 20:00:00', '2023-09-10 19:45:00', '2023-09-10 17:50:11'),
(116, 2, 'TesztMOST', 'public', 'Teszt', 'Budapest, Magyarország', 'Margit híd', 'active', 'true', '2023-09-11 20:00:00', '2023-09-11 19:30:00', '2023-09-11 17:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `forgotten_passwords`
--

CREATE TABLE `forgotten_passwords` (
  `forgotten_password_id` int NOT NULL,
  `user_id` int NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `forgotten_passwords`
--

INSERT INTO `forgotten_passwords` (`forgotten_password_id`, `user_id`, `token`) VALUES
(38, 17, 'ExgwabkaFebgdrreOfwsrcpkUgtkvoziZxlqoinm');

-- --------------------------------------------------------

--
-- Table structure for table `gifts`
--

CREATE TABLE `gifts` (
  `gift_id` int NOT NULL,
  `event_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `status` enum('available','reserved') COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT 'available',
  `date_time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `gifts`
--

INSERT INTO `gifts` (`gift_id`, `event_id`, `user_id`, `name`, `status`, `date_time`) VALUES
(75, 115, NULL, 'Cronteszt', 'available', '2023-09-10 17:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `invitations`
--

CREATE TABLE `invitations` (
  `invitation_id` int NOT NULL,
  `event_id` int NOT NULL,
  `user_id` int NOT NULL,
  `invited_user_email` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `status` enum('tentative','accepted','declined','joined') CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT 'tentative',
  `state` enum('read','unread') COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT 'unread',
  `date_time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `invitations`
--

INSERT INTO `invitations` (`invitation_id`, `event_id`, `user_id`, `invited_user_email`, `status`, `state`, `date_time`) VALUES
(123, 115, 4, 'pnorbyy01@gmail.com', 'accepted', 'read', '2023-09-10 17:58:12'),
(128, 116, 2, 'pnorbyy01@gmail.com', 'accepted', 'read', '2023-09-11 17:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int NOT NULL,
  `user_id` int NOT NULL,
  `device_type` enum('computer','phone','tablet') CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `http_accept` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `http_user_agent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `ip_address` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `country_code` varchar(32) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `user_id`, `device_type`, `http_accept`, `http_user_agent`, `ip_address`, `country_code`, `date_time`) VALUES
(31, 4, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-19 19:24:41'),
(32, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-19 19:25:06'),
(33, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-19 19:25:42'),
(34, 4, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-19 19:41:47'),
(35, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-19 19:42:51'),
(36, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-19 19:43:38'),
(37, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-19 19:45:10'),
(38, 4, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-19 19:54:56'),
(39, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-19 19:55:35'),
(40, 4, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-19 19:56:19'),
(41, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-19 20:16:03'),
(42, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '77.243.25.117', 'RS', '2023-01-21 16:43:43'),
(43, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-21 19:48:08'),
(44, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-21 19:49:14'),
(45, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '37.19.108.10', 'RS', '2023-01-22 19:29:54'),
(46, 17, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '37.19.108.10', 'RS', '2023-01-22 19:58:37'),
(47, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '37.19.108.10', 'RS', '2023-01-22 20:06:17'),
(49, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '37.19.108.10', 'RS', '2023-01-22 20:16:02'),
(50, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '77.243.25.93', 'RS', '2023-01-24 14:48:55'),
(51, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-25 11:17:02'),
(52, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-25 11:19:57'),
(55, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-25 11:41:21'),
(57, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-25 11:46:27'),
(58, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-25 12:05:05'),
(59, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-25 12:05:18'),
(60, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-25 12:05:30'),
(61, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-25 12:06:50'),
(63, 4, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-25 12:12:58'),
(66, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-29 11:55:56'),
(67, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-29 11:57:47'),
(68, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-29 13:22:37'),
(69, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-29 13:22:54'),
(70, 4, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-29 13:23:09'),
(71, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-29 17:55:58'),
(74, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-30 11:42:17'),
(76, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-30 11:57:36'),
(77, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-30 11:58:39'),
(78, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-30 11:59:29'),
(80, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-30 12:01:13'),
(81, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-30 12:03:02'),
(82, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-30 12:03:36'),
(84, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-30 12:09:50'),
(86, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-30 12:11:18'),
(87, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-30 12:14:09'),
(89, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-30 12:17:44'),
(91, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-30 12:18:30'),
(93, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-30 12:25:33'),
(95, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-30 12:26:24'),
(96, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-30 12:31:01'),
(97, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-30 17:21:33'),
(99, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-30 21:50:01'),
(101, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-30 21:51:57'),
(103, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-30 21:52:58'),
(104, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-30 22:04:15'),
(105, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-30 22:07:32'),
(106, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-30 23:25:09'),
(107, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-30 23:48:23'),
(108, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-30 23:57:57'),
(109, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-31 00:01:33'),
(110, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-31 04:30:44'),
(111, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-01-31 04:43:11'),
(112, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-31 04:54:18'),
(113, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-31 04:56:31'),
(115, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-31 04:59:55'),
(116, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-31 05:00:51'),
(117, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-31 05:01:05'),
(118, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-31 05:01:49'),
(120, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-31 05:09:11'),
(122, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-01-31 05:24:42'),
(124, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '188.120.96.101', 'RS', '2023-01-31 08:09:15'),
(125, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '188.120.96.101', 'RS', '2023-01-31 08:25:24'),
(126, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '188.120.117.210', 'RS', '2023-01-31 08:45:25'),
(128, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '188.120.117.210', 'RS', '2023-01-31 09:06:00'),
(129, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '188.120.117.210', 'RS', '2023-01-31 09:10:07'),
(130, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '77.243.22.251', 'RS', '2023-02-21 20:41:39'),
(131, 4, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-04-11 10:48:36'),
(132, 4, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-05-18 14:45:51'),
(133, 4, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-05-18 14:47:36'),
(134, 4, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-07-06 11:28:03'),
(135, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-07-06 11:29:12'),
(136, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-07-28 15:48:53'),
(137, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-03 12:39:31'),
(138, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-03 13:15:57'),
(139, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-09 11:16:35'),
(140, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-09 12:46:14'),
(141, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-09 15:50:21'),
(142, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-09 19:26:57'),
(143, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-09 19:31:29'),
(144, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-09 19:31:29'),
(145, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-09 19:34:56'),
(146, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-09 20:13:46'),
(148, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-09 20:39:19'),
(149, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '77.243.22.40', 'RS', '2023-08-09 22:10:55'),
(150, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-10 01:34:42'),
(152, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-10 01:40:30'),
(155, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-10 10:08:12'),
(156, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-10 11:22:39'),
(157, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-10 13:53:38'),
(159, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-10 13:55:11'),
(161, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-10 13:57:40'),
(162, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-10 13:58:44'),
(164, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-10 14:03:39'),
(166, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-10 14:04:46'),
(167, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-13 12:24:51'),
(168, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-14 15:32:42'),
(170, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-14 17:59:17'),
(172, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-18 14:20:34'),
(173, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-18 14:25:36'),
(174, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-18 14:27:12'),
(175, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-18 14:29:12'),
(176, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-18 14:31:30'),
(177, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-18 14:32:24'),
(178, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-18 14:32:34'),
(179, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-18 14:33:28'),
(180, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-18 14:34:45'),
(181, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-18 14:39:55'),
(182, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-18 14:46:58'),
(183, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-18 14:50:10'),
(186, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-18 16:29:42'),
(188, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '77.243.24.22', 'RS', '2023-08-18 16:41:02'),
(189, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-18 19:07:32'),
(190, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-18 19:10:04'),
(191, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-18 19:19:14'),
(192, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-18 20:03:30'),
(193, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '77.243.24.148', 'RS', '2023-08-18 22:12:56'),
(194, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-18 23:05:01'),
(195, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-18 23:14:20'),
(196, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-18 23:25:18'),
(197, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-19 00:55:43'),
(198, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-19 09:25:43'),
(199, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-19 09:55:42'),
(200, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-19 11:37:48'),
(201, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-19 16:32:11'),
(202, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-19 22:55:07'),
(203, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-19 23:52:01'),
(204, 17, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-20 01:04:04'),
(205, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-20 01:05:43'),
(206, 17, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-20 01:06:21'),
(207, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-20 01:08:40'),
(208, 17, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-20 01:10:13'),
(209, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-21 22:00:34'),
(210, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-21 22:01:45'),
(211, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '188.120.99.212', 'RS', '2023-08-22 12:02:29'),
(212, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '188.120.99.212', 'RS', '2023-08-22 12:05:05'),
(213, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '188.120.99.212', 'RS', '2023-08-22 12:08:25'),
(214, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '188.120.99.212', 'RS', '2023-08-22 12:19:09'),
(215, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '188.120.96.38', 'RS', '2023-08-22 15:12:14'),
(216, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-22 17:41:24'),
(217, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-22 21:50:43'),
(218, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-25 14:30:37'),
(219, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-26 18:18:39'),
(220, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-28 14:09:10'),
(221, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-28 16:44:03'),
(222, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-28 16:45:04'),
(223, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-28 16:45:24'),
(224, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-28 17:54:53'),
(225, 17, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-29 08:14:37'),
(226, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-29 08:19:45'),
(227, 17, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-08-29 08:20:11'),
(228, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '147.91.199.142', 'RS', '2023-08-29 12:29:35'),
(229, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '147.91.199.142', 'RS', '2023-08-29 12:37:07'),
(230, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '147.91.199.142', 'RS', '2023-08-29 12:37:40'),
(231, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '147.91.199.142', 'RS', '2023-08-29 12:37:57'),
(232, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '147.91.199.142', 'RS', '2023-08-29 12:53:36'),
(233, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-29 18:17:23'),
(234, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-29 18:25:03'),
(235, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-29 19:25:52'),
(236, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-29 19:28:44');
INSERT INTO `logs` (`log_id`, `user_id`, `device_type`, `http_accept`, `http_user_agent`, `ip_address`, `country_code`, `date_time`) VALUES
(237, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-29 19:33:06'),
(238, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-29 22:37:03'),
(239, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-30 10:25:17'),
(240, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-30 10:25:31'),
(241, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-30 10:27:01'),
(242, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-08-30 10:27:16'),
(243, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 00:41:03'),
(244, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 10:00:05'),
(245, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 10:40:33'),
(246, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 10:42:17'),
(247, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 10:46:51'),
(248, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 11:22:22'),
(249, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 11:27:16'),
(250, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 11:27:39'),
(251, 4, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 11:27:53'),
(252, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 12:45:53'),
(253, 4, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 13:14:20'),
(254, 4, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 13:20:31'),
(255, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 13:32:42'),
(256, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 13:32:49'),
(257, 4, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 13:33:09'),
(258, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 13:33:55'),
(259, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 13:41:55'),
(260, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 13:42:04'),
(261, 4, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 14:42:34'),
(262, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 14:43:58'),
(263, 4, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-01 14:46:28'),
(264, 2, 'phone', 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1', '46.40.46.148', 'RS', '2023-09-03 23:29:14'),
(265, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-05 14:33:58'),
(266, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-10 12:25:18'),
(267, 4, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-10 12:26:58'),
(268, 4, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-10 17:56:40'),
(269, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-10 17:56:57'),
(270, 4, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-10 17:57:29'),
(271, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 16:55:46'),
(272, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 17:02:44'),
(273, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 17:06:07'),
(274, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 17:06:49'),
(275, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 17:09:01'),
(276, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 17:09:29'),
(277, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 17:09:51'),
(278, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 17:10:18'),
(279, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 17:12:13'),
(280, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 17:12:31'),
(281, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 17:14:21'),
(283, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 17:15:56'),
(284, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 17:16:25'),
(285, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 17:17:18'),
(286, 17, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 17:25:32'),
(287, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 17:28:19'),
(288, 2, 'computer', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '46.40.46.148', 'RS', '2023-09-11 22:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `firstname` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `lastname` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `image` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT 'default-profile-picture.jpg',
  `email` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL,
  `level` enum('admin','guest','invited','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL DEFAULT 'user',
  `active` tinyint NOT NULL,
  `registration_expires` datetime DEFAULT NULL,
  `registered_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `firstname`, `lastname`, `image`, `email`, `password`, `token`, `level`, `active`, `registration_expires`, `registered_at`) VALUES
(2, 'pnorbi', 'Norbert', 'Peter', 'a4a1ad785d8fd701e3b384ac38743d11.jpg', 'pnorbyy01@gmail.com', '$2y$10$KhTZOg9InEPf30TOCCa1qONEEMFuRckg7qk5bj862dFieQUOgcT..', '', 'admin', 1, '0000-00-00 00:00:00', '2022-12-24 20:13:20'),
(4, 'pnorbi20010225', 'Norbi', 'Peter', 'f50884ef9bc9e2f008dd6b1b240e0f54.jpg', 'bonnycsgo@hotmail.com', '$2y$10$ojYbDq/Dmf3U9WimMbn/nuqVd2a9/YNvdrZniqNWa4CU7a/i4fzwi', '', 'user', 1, '0000-00-00 00:00:00', '2022-12-24 21:07:14'),
(17, 'eventrain', 'Norbert', 'Péter', 'default-profile-picture.jpg', 'eventrain@gmail.hu', '$2y$10$.UXCLgHFk3bFquuI61b8dePOKfcRMNV6/mOqHkyVAdO5uSV0GmvTC', '', 'user', 1, NULL, '2023-01-21 19:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_email_failures`
--

CREATE TABLE `user_email_failures` (
  `user_email_failure_id` int NOT NULL,
  `user_id` int NOT NULL,
  `date_time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `events_ibfk_1` (`user_id`);

--
-- Indexes for table `forgotten_passwords`
--
ALTER TABLE `forgotten_passwords`
  ADD PRIMARY KEY (`forgotten_password_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `gifts`
--
ALTER TABLE `gifts`
  ADD PRIMARY KEY (`gift_id`),
  ADD KEY `gifts_ibfk_1` (`user_id`),
  ADD KEY `gifts_ibfk_2` (`event_id`);

--
-- Indexes for table `invitations`
--
ALTER TABLE `invitations`
  ADD PRIMARY KEY (`invitation_id`),
  ADD KEY `invitations_ibfk_3` (`invited_user_email`),
  ADD KEY `fk_first` (`event_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `logs_ibfk_1` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_email_failures`
--
ALTER TABLE `user_email_failures`
  ADD PRIMARY KEY (`user_email_failure_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api`
--
ALTER TABLE `api`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `forgotten_passwords`
--
ALTER TABLE `forgotten_passwords`
  MODIFY `forgotten_password_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `gifts`
--
ALTER TABLE `gifts`
  MODIFY `gift_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `invitations`
--
ALTER TABLE `invitations`
  MODIFY `invitation_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_email_failures`
--
ALTER TABLE `user_email_failures`
  MODIFY `user_email_failure_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `api`
--
ALTER TABLE `api`
  ADD CONSTRAINT `api_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `forgotten_passwords`
--
ALTER TABLE `forgotten_passwords`
  ADD CONSTRAINT `forgotten_passwords_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `gifts`
--
ALTER TABLE `gifts`
  ADD CONSTRAINT `gifts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gifts_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `invitations`
--
ALTER TABLE `invitations`
  ADD CONSTRAINT `fk_first` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_email_failures`
--
ALTER TABLE `user_email_failures`
  ADD CONSTRAINT `user_email_failures_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
