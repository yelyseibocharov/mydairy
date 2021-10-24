-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июн 03 2021 г., 21:33
-- Версия сервера: 5.5.58
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cabinet`
--

CREATE TABLE `cabinet` (
  `idcabinet` int(11) NOT NULL,
  `cabinetnumber` int(11) NOT NULL,
  `cabinetname` varchar(45) NOT NULL,
  `cabinetplace` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cabinet`
--

INSERT INTO `cabinet` (`idcabinet`, `cabinetnumber`, `cabinetname`, `cabinetplace`) VALUES
(1, 1, 'кабінет початкових класів', 30),
(2, 2, 'кабінет початкових класів', 30),
(3, 3, 'кабінет початкових класів', 30),
(4, 4, 'кабінет початкових класів', 30),
(5, 5, 'кабінет початкових класів', 30),
(6, 6, 'кабінет початкових класів', 30),
(7, 7, 'кабінет початкових класів', 30),
(8, 8, 'кабінет початкових класів', 30),
(9, 9, 'кабінет початкових класів', 30),
(10, 10, 'кабінет початкових класів', 30),
(11, 11, 'кабінет початкових класів', 30),
(12, 12, 'кабінет початкових класів', 30),
(13, 13, 'кабінет інформатики', 35),
(14, 14, 'кабінет інформатики', 25),
(15, 15, 'кабінет початкових класів', 30),
(16, 16, 'кабінет початкових класів', 30),
(17, 17, 'кабінет початкових класів', 30),
(18, 18, 'кабінет початкових класів', 30),
(19, 19, 'кабінет хімії', 35),
(20, 20, 'кабінет фізики', 40),
(21, 21, 'кабінет біології', 40),
(22, 22, 'кабінет математики', 35),
(23, 23, 'кабінет української мови та літератури', 35),
(24, 24, 'кабінет початкових класів', 30),
(25, 26, 'кабінет зарубіжної літератури', 35),
(26, 27, 'кабінет географії', 35),
(27, 28, 'кабінет громадянської освіти', 35),
(28, 30, 'кабінет історії та правознавства', 35),
(29, 5, '22', 10),
(30, 29, 'кабінет технологій', 50),
(31, 30, 'Їдальня', 100),
(32, 30, 'Їдальня', 100),
(33, 30, 'Їдальня', 100),
(34, 30, 'Їдальня', 100);

-- --------------------------------------------------------

--
-- Структура таблицы `class`
--

CREATE TABLE `class` (
  `idclass` int(11) NOT NULL,
  `class` varchar(4) NOT NULL,
  `school_idschool` int(11) NOT NULL,
  `teacher_idteacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `class`
--

INSERT INTO `class` (`idclass`, `class`, `school_idschool`, `teacher_idteacher`) VALUES
(1, '1-А', 1, 1),
(30, '1-Б', 1, 3),
(31, '5-А', 1, 22),
(32, '1-В', 1, 21),
(33, '2-А', 1, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `discipline`
--

CREATE TABLE `discipline` (
  `iddiscipline` int(11) NOT NULL,
  `disciplinename` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `discipline`
--

INSERT INTO `discipline` (`iddiscipline`, `disciplinename`) VALUES
(1, 'Українська мова'),
(2, 'Математика'),
(3, 'Фізика'),
(4, 'Алгебра'),
(5, 'Геометрія'),
(6, 'Технології'),
(7, 'Всесвітня історія'),
(8, 'Історія України'),
(9, 'Іноземна мова (англійська)'),
(10, 'Географія'),
(11, 'Іноземна мова (німецька)'),
(12, 'Іноземна мова(французька)'),
(13, 'Іноземна мова (російська)'),
(14, 'Українська література'),
(15, 'Захист Вітчизни'),
(16, 'Інформатика'),
(17, 'Фізична культура'),
(18, 'Хімія'),
(19, 'Біологія'),
(20, 'Іноземна мова (російська)');

-- --------------------------------------------------------

--
-- Структура таблицы `forma`
--

CREATE TABLE `forma` (
  `idformamz` int(11) NOT NULL,
  `forma` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `forma`
--

INSERT INTO `forma` (`idformamz`, `forma`) VALUES
(1, 'Державне фінансування'),
(2, 'Приватний навчальний заклад');

-- --------------------------------------------------------

--
-- Структура таблицы `journal`
--

CREATE TABLE `journal` (
  `idjournal` int(11) NOT NULL,
  `timetable_idtimetable` int(11) NOT NULL,
  `student_idstudent` int(11) NOT NULL,
  `appraisals` int(11) DEFAULT NULL,
  `presence` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `obl`
--

CREATE TABLE `obl` (
  `idobl` int(11) NOT NULL,
  `obl` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `obl`
--

INSERT INTO `obl` (`idobl`, `obl`) VALUES
(1, 'м.Київ'),
(2, 'м.Харків'),
(3, 'м.Дніпро'),
(4, 'м.Одеса');

-- --------------------------------------------------------

--
-- Структура таблицы `osvita`
--

CREATE TABLE `osvita` (
  `idosvita` int(11) NOT NULL,
  `osvita` varchar(45) NOT NULL,
  `osvitadiscipline` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `osvita`
--

INSERT INTO `osvita` (`idosvita`, `osvita`, `osvitadiscipline`) VALUES
(1, '013', 'Викладач початкової освіти'),
(2, '017', 'Викладач фізичної культури і спорту'),
(3, '023', 'Викладач образотворчого мистецтва'),
(4, '025', 'Викладач музичного мистецтва'),
(5, '032', 'Викладач історії'),
(6, '033', 'Викладач філософії'),
(7, '034', 'Викладач художньої культури'),
(8, '051', 'Викладач економіки'),
(9, '056', 'Викладач економіки'),
(10, '071', 'Викладач економіки'),
(11, '072', 'Викладач економіки'),
(12, '075', 'Викладач економіки'),
(13, '076', 'Викладач економіки'),
(14, '081', 'Викладач правознавства'),
(15, '082', 'Викладач правознавства'),
(16, '091', 'Викладач біології'),
(17, '101', 'Викладач екології'),
(18, '102', 'Викладач хімії'),
(19, '104', 'Викладач фізики та астрономії'),
(20, '105', 'Викладач фізики'),
(21, '111', 'Викладач математики');

-- --------------------------------------------------------

--
-- Структура таблицы `school`
--

CREATE TABLE `school` (
  `idschool` int(11) NOT NULL,
  `schoolname` varchar(100) NOT NULL,
  `schoolnames` varchar(45) NOT NULL,
  `schoolcreate` date NOT NULL,
  `tip_idtipnz` int(11) NOT NULL,
  `forma_idformamz` int(11) NOT NULL,
  `obl_idobl` int(11) NOT NULL,
  `structure_idstructure` int(11) NOT NULL,
  `schoolstatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `school`
--

INSERT INTO `school` (`idschool`, `schoolname`, `schoolnames`, `schoolcreate`, `tip_idtipnz`, `forma_idformamz`, `obl_idobl`, `structure_idstructure`, `schoolstatus`) VALUES
(1, 'Харківська загальноосвітня школа І-ІІІ ступенів №78 Харківської міської ради Харківської області', 'ХЗОШ №78', '2002-07-08', 1, 1, 2, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `structure`
--

CREATE TABLE `structure` (
  `idstructure` int(11) NOT NULL,
  `structure` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `structure`
--

INSERT INTO `structure` (`idstructure`, `structure`) VALUES
(1, 'Основний заклад'),
(2, 'Корпус');

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `idstudent` int(11) NOT NULL,
  `studentfname` varchar(45) NOT NULL,
  `studentsname` varchar(45) NOT NULL,
  `studentpname` varchar(45) NOT NULL,
  `studentnumber` varchar(18) NOT NULL,
  `studentdate` date NOT NULL,
  `studentadress` varchar(100) NOT NULL,
  `studentnumbm` varchar(18) NOT NULL,
  `studentnumf` varchar(18) NOT NULL,
  `studentemail` varchar(45) NOT NULL,
  `class_idclass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`idstudent`, `studentfname`, `studentsname`, `studentpname`, `studentnumber`, `studentdate`, `studentadress`, `studentnumbm`, `studentnumf`, `studentemail`, `class_idclass`) VALUES
(1, 'Циганкова', 'Марія', 'Тимурівна', '+38(094) 858-54-27', '2001-11-26', 'м. Харків, Амосова 7', '+38(094) 858-54-27', '+38(094) 858-54-27', 'masha@ukr.net', 1),
(2, 'Волощенко', 'Ангеліна', 'Юріївна', '+38(094) 858-54-11', '2002-03-09', 'м. Харків, Немишлянський район', '+38(094) 858-54-27', '+38(094) 858-54-27', 'lina@int.ua', 1),
(23, 'Абєлєнцев', 'Руслан', 'Віталійович', '+38(213) 442-14-15', '2015-05-05', 'вул. Манізера 1-а/7', '+38(213) 442-14-68', '+38(213) 442-14-65', 'ruslan@gmail.com', 1),
(24, 'Баласанян', 'Марія', 'Сергіївна', '+38(213) 442-14-60', '2014-06-04', 'вул. Скрипаля 102', '+38(213) 442-14-07', '+38(213) 442-14-04', 'marya@gmail.com', 1),
(25, 'Мезеря', 'Микита', 'Андрійович', '+38(213) 442-14-66', '2014-01-14', 'вул. Червоноармійська 19-А', '+38(213) 442-14-06', '+38(213) 442-14-05', 'andry@ukr.net', 1),
(26, 'Басала', 'Антон', 'Вікторович', '+38(213) 442-14-68', '2014-02-06', 'вул. Манізера 1-б/7', '+38(213) 442-14-15', '+38(213) 442-14-15', 'basala@ukr.net', 30),
(27, 'Бондаревський', 'Данило', 'Едуардович', '+38(213) 442-14-69', '2014-07-15', 'вул. Манізера 1-б/8', '+38(213) 442-14-14', '+38(213) 442-14-14', 'bondar@ukr.net', 30),
(28, 'Головко', 'Максим', 'Дмитрович', '+38(213) 442-14-60', '2014-10-15', 'вул. Манізера 1-б/9', '+38(213) 442-14-23', '+38(213) 442-14-24', 'golovka@urr.net', 30),
(30, 'Фортуна', 'Вікторія', 'Олександрівна', '+38(213) 442-14-68', '2014-06-11', 'вул. Манізера 1-б/16', '+38(213) 442-14-63', '+38(213) 442-14-65', 'fortuna@ukr.net', 30),
(31, 'Абдулаев', 'Ібрагім', 'Ібрагімович', '+38(099) 661-07-64', '2020-12-17', 'м.Харків, вул Велика Бронна 25', '+38(099) 661-07-62', '+38(099) 661-07-62', 'sobaka@gmai.com', 30),
(33, 'Аганесов', 'Даніїл', 'Рестархович', '+38(333) 333-33-34', '2021-02-10', 'САДОВИЙ 11', '+38(333) 333-33-31', '+38(333) 333-33-32', 'poroh@gmail.coms', 31),
(34, 'Абвгдейко', 'Оксана', 'Максимівна', '+38(055) 474-11-45', '2017-05-09', 'проспект Ілліча, буд 10, кв 212', '+38(123) 456-78-91', '+38(025) 745-22-22', 'abvgdeyko@gmail.com', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `teacher`
--

CREATE TABLE `teacher` (
  `idteacher` int(11) NOT NULL,
  `teacherfname` varchar(45) NOT NULL,
  `teachersname` varchar(45) NOT NULL,
  `teacherpname` varchar(45) NOT NULL,
  `teacherdate` date NOT NULL,
  `teachernumber` varchar(18) NOT NULL,
  `teacheradr` varchar(100) NOT NULL,
  `teacheremail` varchar(45) NOT NULL,
  `tpermission` int(1) NOT NULL,
  `tpassword` varchar(100) NOT NULL,
  `school_idschool` int(11) NOT NULL,
  `osvita_idosvita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teacher`
--

INSERT INTO `teacher` (`idteacher`, `teacherfname`, `teachersname`, `teacherpname`, `teacherdate`, `teachernumber`, `teacheradr`, `teacheremail`, `tpermission`, `tpassword`, `school_idschool`, `osvita_idosvita`) VALUES
(1, 'Прочухан', 'Дмитро', 'Володимирович', '1980-10-10', '+38(099) 587-75-84', 'м. Харків, Манізера 4', 'd.ddd@gmail.com', 0, '', 1, 1),
(3, 'Конотоп', 'Єлизавета', 'Володимирівна', '1990-12-12', '+38(097) 588-76-80', 'Україна, 61128, Харківська обл., місто Харків, САДОВИЙ ПРОЇЗД, будинок 9', 'konotop@gmail.com', 0, '', 1, 16),
(4, 'Потапенко', 'Марина', 'Олександрівна', '1980-06-12', '+38(066) 500-76-99', 'вул.Ватутіна 23', 'm.potapenko@gmail.com', 0, '', 1, 8),
(5, 'Сластьон', 'Наталя', 'Петрівна', '1965-03-25', '+38(067) 520-76-99', 'вул.Ватутіна 101', 'm.potapenko@gmail.com', 0, '', 1, 5),
(6, 'Курило', 'Ольга', 'Дмитрівна', '1974-06-12', '+38(099) 500-76-00', 'вул.Ватутіна 102', 'kurilo@gmail.com', 0, '', 1, 21),
(7, 'Немига', 'Василь', 'Петрович', '1988-06-12', '+38(066) 500-76-04', 'вул.Ватутіна 123', 'nemiga@gmail.com', 0, '', 1, 2),
(8, 'Ломинога', 'Катерина', 'Константинівна', '1994-06-12', '+38(096) 500-46-99', 'вул.Ватутіна 223', 'lominoga@gmail.com', 0, '', 1, 4),
(9, 'Мальовнича', 'Глорія', 'Абаранжанівна', '1985-06-12', '+38(098) 540-76-99', 'вул.Ватутіна 253', 'maliova@gmail.com', 0, '', 1, 3),
(10, 'Петрова', 'Марія', 'Андріївна', '1981-06-12', '+38(077) 400-76-99', 'вул.Ватутіна 273', 'petrova@gmail.com', 0, '', 1, 6),
(11, 'Потапова', 'Анастасія', 'Даніїлівна', '1971-06-12', '+38(073) 577-76-99', 'вул.Ватутіна 523', 'potapenko@gmail.com', 0, '', 1, 7),
(12, 'Алабамова', 'Маргарита', 'Аелітівна', '1972-06-12', '+38(057) 578-76-99', 'вул.Ватутіна 423', 'alabamova@gmail.com', 0, '', 1, 8),
(13, 'Богдан', 'Андрій', 'Маркович', '1984-06-12', '+38(047) 550-76-99', 'вул.Ватутіна 323', 'bogdan@gmail.com', 0, '', 1, 14),
(14, 'Петренко', 'Володимир', 'Анатолійович', '1985-06-12', '+38(085) 500-10-99', 'вул.Ватутіна 223', 'petrenko@gmail.com', 0, '', 1, 17),
(15, 'Глоба', 'Любов', 'Володимирівна', '1986-06-12', '+38(069) 500-16-99', 'вул.Ватутіна 823', 'globa@gmail.com', 0, '', 1, 18),
(16, 'Виноградова', 'Світлана', 'Яковлівна', '1987-06-12', '+38(098) 111-76-99', 'вул.Ватутіна 123', 'vinogradova@gmail.com', 0, '', 1, 19),
(17, 'Хмільна', 'Анастасія', 'Павлівна', '1988-06-12', '+38(094) 112-76-99', 'вул.Ватутіна 223', 'hmilna@gmail.com', 0, '', 1, 20),
(18, 'Запара', 'Михайло', 'Олександрович', '1989-06-12', '+38(096) 122-76-99', 'вул.Ватутіна 243', 'zapara@gmail.com', 0, '', 1, 19),
(19, 'Ольжина', 'Марина', 'Семенівна', '1974-06-12', '+38(048) 123-76-99', 'вул.Ватутіна 273', 'olzhina@gmail.com', 0, '', 1, 9),
(20, 'Фурманов', 'Петро', 'Констянтинович', '1990-02-15', '+38(213) 442-14-65', 'вул. Манізера 1', 'furma@gmail.com', 0, '', 1, 21),
(21, 'Говдерчак', 'Анастасія', 'Павлівна', '1990-06-13', '+38(602) 671-66-15', 'вул. Манізера 1', 'malisheva@ukr.net', 0, '', 1, 21),
(22, 'Надьон', 'Любов', 'Володимирівна', '1976-07-30', '+38(050) 854-77-75', 'м.Харків, вул Велика дачна 10-Г, кв. 114', 'lubov-lubov@gmail.com', 0, '', 1, 21),
(23, 'Порох', 'Максим', 'Сергійович', '1990-11-11', '+38(099) 223-34-45', 'САДОВИЙ', 'poroh@gmail.com', 1, '$2y$10$j7wZT523i40UeUj0Z9Lmdee8kqxnPs2jEZsL4lpylNS74odJhXe1m', 1, 21),
(24, 'Анатам', 'Промир', 'Сергійович', '1990-11-11', '+38(099) 223-34-45', 'САДОВИЙ 11', 'an@gmail.com', 1, '$2y$10$nZ/QtB187.4lbdGZ9K7bLO245RvENkLlQeVzObwvxP2gkxP0T519e', 1, 19),
(25, 'Бочаров', 'Єлисей', 'Юрійович', '2000-12-11', '+38(099) 223-34-05', 'СУМСЬКА ', 'eliseyytv@gmail.com', 1, '$2y$10$luhcYUT.6fViLuSjGphnQuDHE74IrJ4Cw0EU3o14PHNmJH9eE33vi', 1, 21),
(26, 'Тестувальник', 'Тестувальнику', 'Тестує', '1111-11-11', '+38(111) 111-11-15', 'Манізера 4', 'test@mydairy.ua', 1, '$2y$10$pL9AXrb71Dk0wDVNUcEqFeC0x.gBL9AZgH0k35rEYojfnWTV6s9jS', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `timetable`
--

CREATE TABLE `timetable` (
  `idtimetable` int(11) NOT NULL,
  `timetablenlesson` int(11) NOT NULL,
  `lessonhw` varchar(45) NOT NULL,
  `lessontheme` varchar(45) NOT NULL,
  `lessonnotes` varchar(45) DEFAULT NULL,
  `class_idclass` int(11) NOT NULL,
  `teacher_idteacher` int(11) NOT NULL,
  `discipline_iddiscipline` int(11) NOT NULL,
  `cabinet_idcabinet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `timetable`
--

INSERT INTO `timetable` (`idtimetable`, `timetablenlesson`, `lessonhw`, `lessontheme`, `lessonnotes`, `class_idclass`, `teacher_idteacher`, `discipline_iddiscipline`, `cabinet_idcabinet`) VALUES
(1, 1, 'Прочитати 1 параграф', 'Вступний урок', NULL, 31, 21, 2, 22),
(2, 1, 'Прочитати про жирафу', 'ТЕМА 1. Тварини', NULL, 1, 3, 19, 21),
(3, 2, 'Параграф 2', 'Цілі числа. Пропорція.', NULL, 31, 21, 2, 22);

-- --------------------------------------------------------

--
-- Структура таблицы `tip`
--

CREATE TABLE `tip` (
  `idtipnz` int(11) NOT NULL,
  `tip` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tip`
--

INSERT INTO `tip` (`idtipnz`, `tip`) VALUES
(1, 'Загальноосвітня школа'),
(2, 'Відокремлений структурний підрозділ'),
(3, 'Ліцей'),
(4, 'Гімназія');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cabinet`
--
ALTER TABLE `cabinet`
  ADD PRIMARY KEY (`idcabinet`);

--
-- Индексы таблицы `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`idclass`),
  ADD KEY `fk_class_school1_idx` (`school_idschool`),
  ADD KEY `fk_class_teacher1_idx` (`teacher_idteacher`);

--
-- Индексы таблицы `discipline`
--
ALTER TABLE `discipline`
  ADD PRIMARY KEY (`iddiscipline`);

--
-- Индексы таблицы `forma`
--
ALTER TABLE `forma`
  ADD PRIMARY KEY (`idformamz`);

--
-- Индексы таблицы `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`idjournal`),
  ADD KEY `fk_journal_timetable1_idx` (`timetable_idtimetable`),
  ADD KEY `fk_journal_student1_idx` (`student_idstudent`);

--
-- Индексы таблицы `obl`
--
ALTER TABLE `obl`
  ADD PRIMARY KEY (`idobl`);

--
-- Индексы таблицы `osvita`
--
ALTER TABLE `osvita`
  ADD PRIMARY KEY (`idosvita`);

--
-- Индексы таблицы `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`idschool`),
  ADD KEY `fk_school_tip_idx` (`tip_idtipnz`),
  ADD KEY `fk_school_forma1_idx` (`forma_idformamz`),
  ADD KEY `fk_school_obl1_idx` (`obl_idobl`),
  ADD KEY `fk_school_structure1_idx` (`structure_idstructure`);

--
-- Индексы таблицы `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`idstructure`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`idstudent`),
  ADD KEY `fk_student_class1_idx` (`class_idclass`);

--
-- Индексы таблицы `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`idteacher`),
  ADD KEY `fk_teacher_school1_idx` (`school_idschool`),
  ADD KEY `fk_teacher_osvita1_idx` (`osvita_idosvita`);

--
-- Индексы таблицы `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`idtimetable`),
  ADD KEY `fk_timetable_class1_idx` (`class_idclass`),
  ADD KEY `fk_timetable_teacher1_idx` (`teacher_idteacher`),
  ADD KEY `fk_timetable_discipline1_idx` (`discipline_iddiscipline`),
  ADD KEY `fk_timetable_cabinet1_idx` (`cabinet_idcabinet`);

--
-- Индексы таблицы `tip`
--
ALTER TABLE `tip`
  ADD PRIMARY KEY (`idtipnz`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cabinet`
--
ALTER TABLE `cabinet`
  MODIFY `idcabinet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `class`
--
ALTER TABLE `class`
  MODIFY `idclass` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `discipline`
--
ALTER TABLE `discipline`
  MODIFY `iddiscipline` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `forma`
--
ALTER TABLE `forma`
  MODIFY `idformamz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `journal`
--
ALTER TABLE `journal`
  MODIFY `idjournal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `obl`
--
ALTER TABLE `obl`
  MODIFY `idobl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `school`
--
ALTER TABLE `school`
  MODIFY `idschool` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `structure`
--
ALTER TABLE `structure`
  MODIFY `idstructure` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `student`
--
ALTER TABLE `student`
  MODIFY `idstudent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `teacher`
--
ALTER TABLE `teacher`
  MODIFY `idteacher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `timetable`
--
ALTER TABLE `timetable`
  MODIFY `idtimetable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tip`
--
ALTER TABLE `tip`
  MODIFY `idtipnz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `fk_class_school1` FOREIGN KEY (`school_idschool`) REFERENCES `school` (`idschool`),
  ADD CONSTRAINT `fk_class_teacher1` FOREIGN KEY (`teacher_idteacher`) REFERENCES `teacher` (`idteacher`);

--
-- Ограничения внешнего ключа таблицы `journal`
--
ALTER TABLE `journal`
  ADD CONSTRAINT `fk_journal_student1` FOREIGN KEY (`student_idstudent`) REFERENCES `student` (`idstudent`),
  ADD CONSTRAINT `fk_journal_timetable1` FOREIGN KEY (`timetable_idtimetable`) REFERENCES `timetable` (`idtimetable`);

--
-- Ограничения внешнего ключа таблицы `school`
--
ALTER TABLE `school`
  ADD CONSTRAINT `fk_school_forma1` FOREIGN KEY (`forma_idformamz`) REFERENCES `forma` (`idformamz`),
  ADD CONSTRAINT `fk_school_obl1` FOREIGN KEY (`obl_idobl`) REFERENCES `obl` (`idobl`),
  ADD CONSTRAINT `fk_school_structure1` FOREIGN KEY (`structure_idstructure`) REFERENCES `structure` (`idstructure`),
  ADD CONSTRAINT `fk_school_tip` FOREIGN KEY (`tip_idtipnz`) REFERENCES `tip` (`idtipnz`);

--
-- Ограничения внешнего ключа таблицы `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_student_class1` FOREIGN KEY (`class_idclass`) REFERENCES `class` (`idclass`);

--
-- Ограничения внешнего ключа таблицы `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `fk_teacher_osvita1` FOREIGN KEY (`osvita_idosvita`) REFERENCES `osvita` (`idosvita`),
  ADD CONSTRAINT `fk_teacher_school1` FOREIGN KEY (`school_idschool`) REFERENCES `school` (`idschool`);

--
-- Ограничения внешнего ключа таблицы `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `fk_timetable_cabinet1` FOREIGN KEY (`cabinet_idcabinet`) REFERENCES `cabinet` (`idcabinet`),
  ADD CONSTRAINT `fk_timetable_class1` FOREIGN KEY (`class_idclass`) REFERENCES `class` (`idclass`),
  ADD CONSTRAINT `fk_timetable_discipline1` FOREIGN KEY (`discipline_iddiscipline`) REFERENCES `discipline` (`iddiscipline`),
  ADD CONSTRAINT `fk_timetable_teacher1` FOREIGN KEY (`teacher_idteacher`) REFERENCES `teacher` (`idteacher`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
