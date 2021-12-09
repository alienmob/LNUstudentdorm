-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 05:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dorm_lnu`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(15) NOT NULL,
  `admin_id` int(15) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `admin_id`, `date_time`, `details`) VALUES
(484, 1, '2021-12-02 13:20:19', 'Added ``Lavinia Holcomb`` to the Student record.'),
(485, 1, '2021-12-02 13:20:51', 'Added ``Virginia Singleton Ann Ortega`` to the Student record.'),
(486, 1, '2021-12-02 13:22:20', 'Set Payment for the month of Dec 01, 2021 to Dec 31, 2021'),
(487, 1, '2021-12-02 13:26:41', 'Deleted Virginia Singleton Ann Ortega`s Student record.'),
(488, 1, '2021-12-02 13:39:01', 'Added ``Amela Patton`` to the Student record.'),
(489, 1, '2021-12-02 13:39:22', 'Added ``Aileen Garza`` to the Student record.'),
(490, 1, '2021-12-02 13:39:42', 'Added ``Zenia Hurley`` to the Student record.'),
(491, 1, '2021-12-02 13:40:01', 'Added ``Caesar Warren`` to the Student record.'),
(492, 1, '2021-12-02 13:40:17', 'Added ``Signe Delaney`` to the Student record.'),
(493, 1, '2021-12-02 13:40:34', 'Added ``Uriel Cote`` to the Student record.'),
(494, 1, '2021-12-02 13:50:48', 'Added ``Clean Up Drive | Dec 02, 2021`` as an event in Event Management Record.'),
(495, 1, '2021-12-02 13:52:38', 'Deleted Osborn Kim`s Student record.'),
(496, 1, '2021-12-02 13:52:44', 'Deleted Atkinson Keelie`s Student record.'),
(497, 1, '2021-12-02 13:52:49', 'Deleted Uriel Cote`s Student record.'),
(498, 1, '2021-12-02 13:52:54', 'Deleted Signe Delaney`s Student record.'),
(499, 1, '2021-12-02 13:53:06', 'Deleted Amela Patton`s Student record.'),
(500, 1, '2021-12-02 13:53:37', 'Set Payment for the month of Dec 01, 2021 to Dec 31, 2021'),
(501, 1, '2021-12-02 13:54:48', 'Added Violation Record for ``Jeremiah Embana``.'),
(502, 1, '2021-12-02 14:06:19', 'Confirmed Lynette Pomasin`s Unpaid Payment Record.'),
(503, 1, '2021-12-02 14:06:27', 'Confirmed Gia Nila Pantas`s Unpaid Payment Record.'),
(504, 1, '2021-12-02 14:06:34', 'Confirmed Magee Everett Julie Gould`s Unpaid Payment Record.'),
(505, 1, '2021-12-02 14:06:42', 'Confirmed Leach Kai`s Unpaid Payment Record.'),
(506, 1, '2021-12-02 14:07:10', 'Set Payment for the month of Nov 01, 2021 to Nov 30, 2021'),
(507, 1, '2021-12-02 14:15:47', 'Sent ``Deadline Today`` Email Notification to All Registered Students.'),
(508, 1, '2021-12-02 14:15:56', 'Sent Email Notification to All Late Unpaid Students.'),
(509, 1, '2021-12-02 14:22:59', 'Signed Out'),
(510, 1, '2021-12-02 15:05:38', 'Signed In'),
(511, 1, '2021-12-02 15:05:45', 'Sent ``Deadline Today`` Email Notification to All Registered Students.'),
(512, 1, '2021-12-02 15:06:19', 'Sent Email Notification to All Late Unpaid Students.'),
(513, 1, '2021-12-02 15:12:12', 'Changed RFID Function to ``Event Attendance Mode``'),
(514, 1, '2021-12-02 15:12:21', 'Changed RFID Function to ``Log Book Mode``'),
(515, 1, '2021-12-02 15:12:27', 'Changed RFID Function to ``Event Attendance Mode``'),
(516, 1, '2021-12-02 15:12:32', 'Changed RFID Function to ``Log Book Mode``'),
(517, 1, '2021-12-02 15:12:41', 'Changed RFID Function to ``Event Attendance Mode``'),
(518, 1, '2021-12-02 15:12:54', 'Changed RFID Function to ``Log Book Mode``'),
(519, 1, '2021-12-02 15:13:00', 'Changed RFID Function to ``Event Attendance Mode``'),
(520, 1, '2021-12-02 15:14:09', 'Changed RFID Function to ``Log Book Mode``'),
(521, 1, '2021-12-02 15:23:03', 'Confirmed Jeremiah Embana`s Unpaid Payment Record.'),
(522, 1, '2021-12-02 15:39:14', 'Signed Out'),
(523, 1, '2021-12-02 15:39:29', 'Signed In'),
(524, 1, '2021-12-02 15:39:42', 'Deleted Jeremiah Embana`s Student record.'),
(525, 1, '2021-12-02 15:50:11', 'Added ``Jeremiah Embana`` to the Student record.'),
(526, 1, '2021-12-02 15:52:53', 'Approved Jeremiah Embana`s borrow request for Blanket.'),
(527, 1, '2021-12-02 15:54:19', 'Returned Jeremiah Embana`s borrowed Blanket.'),
(528, 1, '2021-12-02 15:56:24', 'Set Payment for the month of Dec 01, 2021 to Jan 31, 2022'),
(529, 1, '2021-12-02 15:59:11', 'Confirmed Jeremiah Embana`s Unpaid Payment Record.'),
(530, 1, '2021-12-02 16:02:06', 'Added Violation Record for ``Jeremiah Embana``.'),
(531, 1, '2021-12-02 16:02:54', 'Deleted Violation Record of ``Jeremiah Embana``.'),
(532, 1, '2021-12-02 16:03:14', 'Added Violation Record for ``Jeremiah Embana``.'),
(533, 1, '2021-12-02 16:08:26', 'Added ``Meeting | Dec 03, 2021`` as an event in Event Management Record.'),
(534, 1, '2021-12-02 16:09:47', 'Changed RFID Function to ``Event Attendance Mode``'),
(535, 1, '2021-12-02 16:11:02', 'Changed RFID Function to ``Log Book Mode``'),
(536, 1, '2021-12-02 16:11:24', 'Signed Out'),
(537, 1, '2021-12-02 16:11:36', 'Signed In'),
(538, 1, '2021-12-02 16:18:58', 'Added ``Clean Up Drive | Dec 06, 2021`` as an event in Event Management Record.'),
(539, 1, '2021-12-02 16:19:25', 'Cancelled ``Clean Up Drive | Dec 06, 2021`` event in Event Management Record.'),
(540, 1, '2021-12-02 16:21:28', 'Cleared All Cancelled events in Event Management Record.'),
(541, 1, '2021-12-02 16:22:20', 'Increased occupancy for 1st Floor - Room 2 in Room Management.'),
(542, 1, '2021-12-02 16:22:33', 'Decreased occupancy for 1st Floor - Room 2 in Room Management.'),
(543, 1, '2021-12-02 16:23:14', 'Modified status for 1st Floor - Room 2 to Unavailable in Room Management.'),
(544, 1, '2021-12-02 16:26:32', 'Added ``Jasmine Young`` to the Transient record.'),
(545, 1, '2021-12-02 16:27:05', 'Checked-Out Jasmine Young.'),
(546, 1, '2021-12-02 16:29:24', 'Sent Email Notification to All Late Unpaid Students.'),
(547, 1, '2021-12-02 16:31:37', 'Modified status for 1st Floor - Room 2 to Available in Room Management.'),
(548, 1, '2021-12-02 16:36:41', 'Increased occupancy for 1st Floor - Room 2 in Room Management.'),
(549, 1, '2021-12-02 16:37:44', 'Modified status for 2nd Floor - Room 1 to Unavailable in Room Management.'),
(550, 1, '2021-12-02 16:37:50', 'Modified status for 2nd Floor - Room 1 to Available in Room Management.'),
(551, 1, '2021-12-02 16:47:31', 'Set Payment for the month of Dec 01, 2021 to Jan 31, 2022'),
(552, 1, '2021-12-02 16:48:32', 'Deleted Leach Kai`s Student record.'),
(553, 1, '2021-12-02 16:48:38', 'Deleted Caesar Warren`s Student record.'),
(554, 1, '2021-12-02 16:48:45', 'Deleted Aileen Garza`s Student record.'),
(555, 1, '2021-12-02 16:49:02', 'Deleted Magee Everett Julie Gould`s Student record.'),
(556, 1, '2021-12-02 16:49:23', 'Deleted Lavinia Holcomb`s Student record.'),
(557, 1, '2021-12-02 17:00:32', 'Decreased occupancy for 1st Floor - Room 2 in Room Management.'),
(558, 1, '2021-12-02 18:02:49', 'Deleted Jeremiah Embana`s Student record.'),
(559, 1, '2021-12-02 18:03:14', 'Deleted ``Clean Up Drive | Nov 14, 2021`` event in Event Management Record.'),
(560, 1, '2021-12-02 18:03:18', 'Deleted ``Meeting | Nov 15, 2021`` event in Event Management Record.'),
(561, 1, '2021-12-02 18:03:33', 'Deleted ``Meeting | Dec 03, 2021`` event in Event Management Record.'),
(562, 1, '2021-12-02 18:04:07', 'Modified status for 1st Floor - Room 2 to Available in Room Management.'),
(563, 1, '2021-12-02 18:05:05', 'Deleted Jeremiah Embana`s Transient record.'),
(564, 1, '2021-12-02 18:10:47', 'Signed Out'),
(565, 1, '2021-12-03 01:04:45', 'Signed In'),
(566, 1, '2021-12-03 01:08:52', 'Added ``Jeremiah Embana`` to the Student record.'),
(567, 1, '2021-12-03 01:10:13', 'Deleted Jeremiah Embana`s Student record.'),
(568, 1, '2021-12-03 01:11:18', 'Signed Out'),
(569, 1, '2021-12-03 01:25:23', 'Signed In'),
(570, 1, '2021-12-03 01:25:46', 'Signed Out'),
(571, 1, '2021-12-03 01:36:03', 'Signed In'),
(572, 1, '2021-12-03 01:36:34', 'Signed Out'),
(573, 1, '2021-12-03 01:45:57', 'Signed In'),
(574, 1, '2021-12-03 01:46:06', 'Signed Out'),
(575, 1, '2021-12-03 02:46:25', 'Signed In'),
(576, 1, '2021-12-03 02:51:38', 'Added ``Jeremiah Embana`` to the Student record.'),
(577, 1, '2021-12-03 03:01:50', 'Approved Jeremiah Embana`s borrow request for Blanket.'),
(578, 1, '2021-12-03 03:02:46', 'Returned Jeremiah Embana`s borrowed Blanket.'),
(579, 1, '2021-12-03 03:20:05', 'Set Payment for the month of Dec 01, 2021 to Dec 31, 2021'),
(580, 1, '2021-12-03 03:23:24', 'Confirmed Jeremiah Embana`s Unpaid Payment Record.'),
(581, 1, '2021-12-03 03:34:45', 'Added ``Meeting | Dec 03, 2021`` as an event in Event Management Record.'),
(582, 1, '2021-12-03 03:35:51', 'Added ``Clean Up Drive | Dec 07, 2021`` as an event in Event Management Record.'),
(583, 1, '2021-12-03 03:36:09', 'Cancelled ``Clean Up Drive | Dec 07, 2021`` event in Event Management Record.'),
(584, 1, '2021-12-03 03:40:57', 'Added Violation Record for ``Jeremiah Embana``.'),
(585, 1, '2021-12-03 03:46:40', 'Changed RFID Function to ``Event Attendance Mode``'),
(586, 1, '2021-12-03 03:54:41', 'Changed RFID Function to ``Log Book Mode``'),
(587, 1, '2021-12-03 04:04:57', 'Signed Out'),
(588, 1, '2021-12-03 11:58:17', 'Signed In'),
(589, 1, '2021-12-03 11:59:14', 'Confirmed Jalyne Terrora`s Unpaid Payment Record.'),
(590, 1, '2021-12-03 11:59:21', 'Confirmed Gia Nila Pantas`s Unpaid Payment Record.'),
(591, 1, '2021-12-03 11:59:29', 'Confirmed Lynette Pomasin`s Unpaid Payment Record.'),
(592, 1, '2021-12-03 11:59:37', 'Confirmed Jalyne Terrora`s Unpaid Payment Record.'),
(593, 1, '2021-12-03 11:59:54', 'Confirmed Gia Nila Pantas`s Unpaid Payment Record.'),
(594, 1, '2021-12-03 12:00:01', 'Confirmed Lynette Pomasin`s Unpaid Payment Record.'),
(595, 1, '2021-12-03 12:20:20', 'Signed Out'),
(596, 1, '2021-12-03 17:32:39', 'Signed In'),
(597, 1, '2021-12-03 17:59:35', 'Modified status for 1st Floor - Room 2 to Unavailable in Room Management.'),
(598, 1, '2021-12-03 18:00:17', 'Modified status for 1st Floor - Room 2 to Available in Room Management.'),
(599, 1, '2021-12-03 18:12:08', 'Modified status for 1st Floor - Room 2 to Unavailable in Room Management.'),
(600, 1, '2021-12-03 18:12:51', 'Modified status for 1st Floor - Room 2 to Available in Room Management.'),
(601, 1, '2021-12-03 18:15:25', 'Signed Out'),
(602, 1, '2021-12-04 08:20:13', 'Signed In'),
(603, 1, '2021-12-04 08:33:38', 'Declined Jeremiah Embana`s borrow request for Pillow.'),
(604, 1, '2021-12-04 09:51:33', 'Declined Gia Nila Pantas`s borrow request for Blanket.'),
(605, 1, '2021-12-04 10:43:55', 'Approved Jeremiah Embana`s borrow request for Bed Sheet.'),
(606, 1, '2021-12-04 10:44:27', 'Declined Jeremiah Embana`s borrow request for Blanket.'),
(607, 1, '2021-12-04 13:29:14', 'Set Payment for the month of Dec 01, 2021 to Dec 31, 2021'),
(608, 1, '2021-12-04 13:29:36', 'Confirmed Jalyne Terrora`s Unpaid Payment Record.'),
(609, 1, '2021-12-04 13:29:40', 'Confirmed Gia Nila Pantas`s Unpaid Payment Record.'),
(610, 1, '2021-12-04 13:29:45', 'Confirmed Jeremiah Embana`s Unpaid Payment Record.'),
(611, 1, '2021-12-04 13:29:50', 'Confirmed Lynette Pomasin`s Unpaid Payment Record.'),
(613, 1, '2021-12-04 13:33:29', 'Set Payment for the month of Dec 01, 2021 to Dec 31, 2021'),
(614, 1, '2021-12-04 13:59:04', 'Signed Out'),
(615, 1, '2021-12-04 15:20:38', 'Signed In'),
(616, 1, '2021-12-04 17:07:43', 'Signed Out'),
(617, 1, '2021-12-05 13:18:09', 'Signed In'),
(618, 1, '2021-12-05 14:13:53', 'Signed In'),
(619, 1, '2021-12-05 14:59:34', 'Signed Out'),
(620, 1, '2021-12-06 07:31:05', 'Signed In'),
(621, 1, '2021-12-06 07:31:20', 'Signed Out'),
(622, 1, '2021-12-06 08:07:29', 'Signed In'),
(623, 1, '2021-12-06 08:14:35', 'Signed Out'),
(624, 1, '2021-12-06 18:08:38', 'Signed In'),
(625, 1, '2021-12-06 18:19:54', 'Deleted Zenia Hurley`s Student record.'),
(626, 1, '2021-12-06 18:45:25', 'Added ``Jessamine Mack Melodie Cote`` to the Student record.'),
(627, 1, '2021-12-06 18:45:40', 'Deleted Jessamine Mack Melodie Cote`s Student record.'),
(628, 1, '2021-12-06 19:29:03', 'Updated Jeremiah Embana`s Student record.'),
(629, 1, '2021-12-06 19:29:12', 'Updated Jeremiah Embana`s Student record.'),
(630, 1, '2021-12-06 19:29:21', 'Updated Jeremiah Embana`s Student record.'),
(631, 1, '2021-12-06 19:29:28', 'Updated Gia Nila Pantas`s Student record.'),
(632, 1, '2021-12-06 19:29:38', 'Updated Lynette Pomasin`s Student record.'),
(633, 1, '2021-12-06 19:29:58', 'Updated Jalyne Terrora`s Student record.'),
(634, 1, '2021-12-06 19:40:30', 'Signed Out'),
(635, 1, '2021-12-07 09:20:21', 'Signed In'),
(636, 1, '2021-12-07 09:20:37', 'Deleted Lynette Pomasin`s Student record.'),
(637, 1, '2021-12-07 09:20:41', 'Deleted Jalyne Terrora`s Student record.'),
(638, 1, '2021-12-07 09:20:46', 'Deleted Gia Nila Pantas`s Student record.'),
(639, 1, '2021-12-07 09:21:18', 'Updated Jeremiah Embana`s Student record.'),
(640, 1, '2021-12-07 10:42:02', 'Set Payment for the month of Dec 01, 2021 to Dec 31, 2021'),
(641, 1, '2021-12-07 11:11:58', 'Set Payment for the month of Dec 01, 2021 to Dec 31, 2021'),
(642, 1, '2021-12-07 13:06:47', 'Signed Out'),
(643, 1, '2021-12-07 14:50:06', 'Signed In'),
(644, 1, '2021-12-07 14:54:44', 'Set Payment for the month of Dec 01, 2021 to Dec 31, 2021'),
(645, 1, '2021-12-07 15:13:25', 'Set Payment for the month of Dec 01, 2021 to Dec 31, 2021'),
(646, 1, '2021-12-07 15:15:35', 'Set Payment for the month of Dec 01, 2021 to Dec 31, 2021'),
(647, 1, '2021-12-07 15:45:25', 'Set Payment for the month of Dec 01, 2021 to Dec 30, 2021'),
(648, 1, '2021-12-07 15:51:30', 'Set Payment for the month of Dec 01, 2021 to Dec 01, 2021'),
(649, 1, '2021-12-07 15:52:54', 'Set Payment for the month of Dec 01, 2021 to Dec 31, 2021'),
(650, 1, '2021-12-07 16:00:39', 'Set Payment for the month of Dec 01, 2021 to Dec 31, 2021'),
(651, 1, '2021-12-07 16:07:48', 'Set Payment for the month of Dec 01, 2021 to Dec 31, 2021'),
(652, 1, '2021-12-08 05:39:50', 'Signed In'),
(653, 1, '2021-12-08 05:42:21', 'Signed Out'),
(654, 1, '2021-12-08 07:09:31', 'Signed In'),
(655, 1, '2021-12-08 07:46:22', 'Added ``Gia Pantas`` to the Student record.'),
(656, 1, '2021-12-08 08:01:51', 'Updated Gia Pantas`s Student record.'),
(657, 1, '2021-12-08 08:04:03', 'Deleted Gia Pantas`s Student record.'),
(658, 1, '2021-12-08 08:35:20', 'Added ``Gia Nila Pantas`` to the Student record.'),
(659, 1, '2021-12-08 08:35:53', 'Updated Gia Nila Pantas`s Student record.'),
(660, 1, '2021-12-08 08:36:13', 'Deleted Gia Nila Pantas`s Student record.'),
(661, 1, '2021-12-08 08:37:38', 'Added ``Dora Ortega Mia Carlson`` to the Student record.'),
(662, 1, '2021-12-08 08:48:47', 'Deleted Dora Ortega Mia Carlson`s Student record.'),
(663, 1, '2021-12-08 09:12:15', 'Added ``Gia Nila Pantas`` to the Student record.'),
(664, 1, '2021-12-08 09:12:33', 'Deleted Gia Nila Pantas`s Student record.'),
(665, 1, '2021-12-08 09:14:40', 'Added ``Ursula Wade`` to the Student record.'),
(666, 1, '2021-12-08 09:15:53', 'Updated Ursula Wade`s Student record.'),
(667, 1, '2021-12-08 09:15:59', 'Deleted Ursula Wade`s Student record.'),
(668, 1, '2021-12-08 09:59:22', 'Increased occupancy for 1st Floor - Room 2 in Room Management.'),
(669, 1, '2021-12-08 10:00:27', 'Decreased occupancy for 1st Floor - Room 2 in Room Management.'),
(670, 1, '2021-12-08 10:00:44', 'Modified status for 1st Floor - Room 2 to Unavailable in Room Management.'),
(671, 1, '2021-12-08 10:01:07', 'Modified status for 1st Floor - Room 2 to Available in Room Management.'),
(672, 1, '2021-12-08 10:23:35', 'Added ``5`` new stock/s for Bed Sheet in Equipment quantity Management.'),
(673, 1, '2021-12-08 11:34:55', 'Added ``R38 - Sample`` in Equipment Record List.'),
(674, 1, '2021-12-08 11:35:59', 'Added ``5`` new stock/s for Sample in Equipment quantity Management.'),
(675, 1, '2021-12-08 11:36:04', 'Marked ``5`` Sample as for Replacement in Equipment quantity Management.'),
(676, 1, '2021-12-08 11:43:39', 'Deleted Sample in Equipment Record List.'),
(677, 1, '2021-12-08 11:45:39', 'Approved Jeremiah Embana`s borrow request for Pillow.'),
(678, 1, '2021-12-08 11:53:49', 'Declined Jeremiah Embana`s borrow request for Pillow.'),
(679, 1, '2021-12-08 11:53:56', 'Declined Jeremiah Embana`s borrow request for Pillow.'),
(680, 1, '2021-12-08 11:54:36', 'Declined Jeremiah Embana`s borrow request for Pillow.'),
(681, 1, '2021-12-08 11:57:42', 'Declined Jeremiah Embana`s borrow request for Pillow.'),
(682, 1, '2021-12-08 12:06:22', 'Declined Jeremiah Embana`s borrow request for .'),
(683, 1, '2021-12-08 12:07:23', 'Declined Jeremiah Embana`s borrow request for .'),
(684, 1, '2021-12-08 12:08:23', 'Approved Jeremiah Embana`s borrow request for Pillow.'),
(685, 1, '2021-12-08 12:08:29', 'Returned Jeremiah Embana`s borrowed Pillow.'),
(686, 1, '2021-12-08 12:10:58', 'Declined Jeremiah Embana`s borrow request for Pillow.'),
(687, 1, '2021-12-08 12:11:04', 'Approved Jeremiah Embana`s borrow request for Pillow.'),
(688, 1, '2021-12-08 12:14:45', 'Declined Jeremiah Embana`s borrow request for Pillow.'),
(689, 1, '2021-12-08 12:16:33', 'Declined Jeremiah Embana`s borrow request for Pillow.'),
(690, 1, '2021-12-08 12:16:57', 'Declined Jeremiah Embana`s borrow request for Pillow.'),
(691, 1, '2021-12-08 12:18:58', 'Deleted Bed Sheet in Equipment Record List.'),
(692, 1, '2021-12-08 12:19:01', 'Deleted Blanket in Equipment Record List.'),
(693, 1, '2021-12-08 12:19:04', 'Deleted Pillow in Equipment Record List.'),
(694, 1, '2021-12-08 12:20:12', 'Added ``Y10 - Bed Sheet`` in Equipment Record List.'),
(695, 1, '2021-12-08 12:20:26', 'Added ``N53 - Blanket`` in Equipment Record List.'),
(696, 1, '2021-12-08 12:20:36', 'Added ``F60 - Pillow`` in Equipment Record List.'),
(697, 1, '2021-12-08 12:21:33', 'Added ``5`` new stock/s for Bed Sheet in Equipment quantity Management.'),
(698, 1, '2021-12-08 12:21:39', 'Marked ``5`` Bed Sheet as for Replacement in Equipment quantity Management.'),
(699, 1, '2021-12-08 12:24:28', 'Approved Jeremiah Embana`s borrow request for Blanket.'),
(700, 1, '2021-12-08 12:24:39', 'Returned Jeremiah Embana`s borrowed Blanket.'),
(701, 1, '2021-12-08 12:30:50', 'Approved Jeremiah Embana`s borrow request for Blanket.'),
(702, 1, '2021-12-08 12:31:43', 'Returned Jeremiah Embana`s borrowed Blanket.'),
(703, 1, '2021-12-08 12:32:09', 'Declined Jeremiah Embana`s borrow request for Blanket.'),
(704, 1, '2021-12-08 12:38:06', 'Declined Jeremiah Embana`s borrow request for Bed Sheet.'),
(705, 1, '2021-12-08 12:38:34', 'Declined Jeremiah Embana`s borrow request for Bed Sheet.'),
(706, 1, '2021-12-08 12:41:37', 'Declined Jeremiah Embana`s borrow request for Bed Sheet.'),
(707, 1, '2021-12-08 12:43:17', 'Declined Jeremiah Embana`s borrow request for Bed Sheet.'),
(708, 1, '2021-12-08 13:00:42', 'Declined Jeremiah Embana`s borrow request for Bed Sheet.'),
(709, 1, '2021-12-08 13:02:01', 'Declined Jeremiah Embana`s borrow request for Bed Sheet.'),
(710, 1, '2021-12-08 13:03:10', 'Declined Jeremiah Embana`s borrow request for Bed Sheet.'),
(711, 1, '2021-12-08 13:07:01', 'Approved Jeremiah Embana`s borrow request for Pillow.'),
(712, 1, '2021-12-08 13:07:13', 'Declined Jeremiah Embana`s borrow request for Blanket.'),
(713, 1, '2021-12-08 13:08:06', 'Returned Jeremiah Embana`s borrowed Pillow.'),
(714, 1, '2021-12-08 15:11:33', 'Approved Jeremiah Embana`s borrow request for Bed Sheet.'),
(715, 1, '2021-12-08 15:15:44', 'Returned Jeremiah Embana`s borrowed Bed Sheet.'),
(716, 1, '2021-12-08 16:33:59', 'Signed In'),
(717, 1, '2021-12-08 16:45:47', 'Set Payment for the month of Dec 01, 2021 to Dec 31, 2021'),
(718, 1, '2021-12-08 16:48:48', 'Confirmed Jeremiah Embana`s Unpaid Payment Record.'),
(719, 1, '2021-12-08 17:04:38', 'Approved Jeremiah Embana`s borrow request for Bed Sheet.'),
(720, 1, '2021-12-08 18:16:50', 'Set Payment for the month of Dec 01, 2021 to Dec 31, 2021'),
(721, 1, '2021-12-08 18:22:12', 'Confirmed Jeremiah Embana`s Unpaid Payment Record.'),
(722, 1, '2021-12-08 18:23:16', 'Signed Out'),
(723, 1, '2021-12-09 01:03:35', 'Signed In'),
(724, 1, '2021-12-09 06:55:51', 'Modified status for 1st Floor - Room 2 to Unavailable in Room Management.'),
(725, 1, '2021-12-09 06:56:15', 'Modified status for 3rd Floor - Room 2 to Unavailable in Room Management.'),
(726, 1, '2021-12-09 06:56:38', 'Decreased occupancy for 1st Floor - Room 1 in Room Management.'),
(727, 1, '2021-12-09 06:58:30', 'Declined Jeremiah Embana`s borrow request for Bed Sheet.'),
(728, 1, '2021-12-09 06:58:38', 'Returned Jeremiah Embana`s borrowed Bed Sheet.'),
(729, 1, '2021-12-09 08:02:21', 'Added ``Gia Nila Pantas`` to the Student record.'),
(730, 1, '2021-12-09 08:18:14', 'Deleted Gia Nila Pantas`s Student record.'),
(731, 1, '2021-12-09 08:19:39', 'Added ``Gia Nila Pantas`` to the Student record.'),
(732, 1, '2021-12-09 08:30:40', 'Added ``Gia Nila Pantas`` to the Student record.'),
(733, 1, '2021-12-09 08:31:48', 'Deleted Gia Nila Pantas`s Student record.'),
(734, 1, '2021-12-09 08:36:27', 'Added ``Gia Nila Pantas`` to the Student record.'),
(735, 1, '2021-12-09 08:37:56', 'Added ``Sebastian Gregory`` to the Student record.'),
(736, 1, '2021-12-09 08:38:30', 'Deleted Gia Nila Pantas`s Student record.'),
(737, 1, '2021-12-09 08:38:34', 'Deleted Sebastian Gregory`s Student record.'),
(738, 1, '2021-12-09 13:53:02', 'Set Payment for the month of Nov 01, 2021 to Dec 31, 2021'),
(739, 1, '2021-12-09 13:53:46', 'Set Payment for the month of Nov 01, 2021 to Nov 30, 2021'),
(740, 1, '2021-12-09 13:54:39', 'Set Payment for the month of Dec 01, 2021 to Dec 31, 2021'),
(741, 1, '2021-12-09 13:55:06', 'Confirmed Jeremiah Embana`s Unpaid Payment Record.'),
(742, 1, '2021-12-09 15:14:32', 'Added ``Gia Nila Pantas`` to the Student record.'),
(743, 1, '2021-12-09 15:17:34', 'Updated Jeremiah Embana`s Student record.'),
(744, 1, '2021-12-09 15:17:46', 'Updated Gia Nila Pantas`s Student record.'),
(745, 1, '2021-12-09 15:17:57', 'Updated Gia Nila Pantas`s Student record.'),
(746, 1, '2021-12-09 15:18:04', 'Updated Jeremiah Embana`s Student record.'),
(747, 1, '2021-12-09 15:19:58', 'Deleted Gia Nila Pantas`s Student record.'),
(748, 1, '2021-12-09 15:28:46', 'Added ``Nehru Villarreal Connor Hewitt`` to the Student record.'),
(749, 1, '2021-12-09 15:29:05', 'Added ``Petra Branch Kaden Suarez`` to the Student record.'),
(750, 1, '2021-12-09 15:29:20', 'Updated Nehru Villarreal Connor Hewitt`s Student record.'),
(751, 1, '2021-12-09 15:29:28', 'Updated Petra Branch Kaden Suarez`s Student record.'),
(752, 1, '2021-12-09 15:29:32', 'Deleted Petra Branch Kaden Suarez`s Student record.'),
(753, 1, '2021-12-09 15:29:35', 'Deleted Nehru Villarreal Connor Hewitt`s Student record.'),
(754, 1, '2021-12-09 15:46:35', 'Updated Jeremiah Embana`s Student record.'),
(755, 1, '2021-12-09 15:46:41', 'Updated Jeremiah Embana`s Student record.'),
(756, 1, '2021-12-09 15:52:29', 'Confirmed Jeremiah Embana`s Unpaid Payment Record.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `address`, `email`, `contact`, `photo`, `created_at`) VALUES
(1, 'username', '$2y$10$ELDCvAfLxOPIPZFXJef7G.tkt3s/g0GVcVy3eC2wg8huEUXJ3YjMW', 'Admin', 'Admin', 'Tacloban City', 'embanaj@gmail.com', '09063774018', 'profile.jpg', '2021-06-02 16:00:00'),
(9, 'Frazier', '$2y$10$pZGblWZkqeRlypd04wH4teDcYkws8LpufaYYyJ3O836Tmiybrr2SW', 'Reuben', 'Frazier', 'Ut repellendus Modi', 'lyrav@mailinator.com', 'Excepteur ut aut qui', '', '2021-10-07 03:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `id` int(11) NOT NULL,
  `student_id` int(15) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `date_borrow` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Appliances'),
(4, 'Furniture'),
(5, 'Bed Equipment');

-- --------------------------------------------------------

--
-- Table structure for table `checkin`
--

CREATE TABLE `checkin` (
  `id` int(11) NOT NULL,
  `transient_id` varchar(100) NOT NULL,
  `floor_id` int(15) NOT NULL,
  `room_id` int(15) NOT NULL,
  `date_in` date NOT NULL,
  `time_in` time NOT NULL,
  `date_out` date NOT NULL,
  `time_out` time NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkin`
--

INSERT INTO `checkin` (`id`, `transient_id`, `floor_id`, `room_id`, `date_in`, `time_in`, `date_out`, `time_out`, `status`) VALUES
(60, 'GKF9168', 4, 5, '2021-12-02', '14:55:00', '2021-12-03', '14:56:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `transient_id` varchar(100) NOT NULL,
  `floor_id` int(15) NOT NULL,
  `room_id` int(15) NOT NULL,
  `date_in` date NOT NULL,
  `time_in` time NOT NULL,
  `date_out` date NOT NULL,
  `time_out` time NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `transient_id`, `floor_id`, `room_id`, `date_in`, `time_in`, `date_out`, `time_out`, `status`) VALUES
(44, 'GKF9168', 4, 5, '2021-12-02', '14:48:00', '2021-12-03', '14:48:00', 1),
(45, 'KRF5062', 2, 2, '2007-05-09', '00:57:00', '2008-04-16', '19:25:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(15) NOT NULL,
  `student_id` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `complaint` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `student_id`, `date`, `complaint`) VALUES
(9, 1800649, '2021-12-03 03:38:48', 'I lost my wallet');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `department`, `title`, `code`) VALUES
(1, 'College of Management and Entrepreneurship', 'Bachelor of Science in Business Administration', 'BSBA'),
(2, 'College of Arts and Sciences', 'Bachelor of Science in Information Technology', 'BSIT'),
(3, 'College of Management and Entrepreneurship', 'Bachelor of Science in Hospitality Management', 'BSHM');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `quantity` bigint(255) DEFAULT 0,
  `quantity_used` bigint(255) DEFAULT 0,
  `quantity_service` bigint(255) DEFAULT 0,
  `quantity_unservice` bigint(255) DEFAULT 0,
  `quantity_total` bigint(255) DEFAULT 0,
  `status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `code`, `category_id`, `title`, `quantity`, `quantity_used`, `quantity_service`, `quantity_unservice`, `quantity_total`, `status`) VALUES
(48, 'Y10', 5, 'Bed Sheet', 10, 0, 10, 5, 15, 0),
(49, 'N53', 5, 'Blanket', 10, 0, 10, 0, 10, 0),
(50, 'F60', 5, 'Pillow', 10, 0, 10, 0, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `equipment_chart`
--

CREATE TABLE `equipment_chart` (
  `id` int(15) NOT NULL,
  `equipment_id` int(15) NOT NULL,
  `available` int(15) DEFAULT NULL,
  `being_used` int(15) DEFAULT NULL,
  `eservice` int(15) DEFAULT NULL,
  `unservice` int(15) DEFAULT NULL,
  `equipment_total` int(15) DEFAULT NULL,
  `current_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment_chart`
--

INSERT INTO `equipment_chart` (`id`, `equipment_id`, `available`, `being_used`, `eservice`, `unservice`, `equipment_total`, `current_date`) VALUES
(7, 48, 10, 0, 10, 0, 10, '2021-12-08 12:20:12'),
(8, 49, 10, 0, 10, 0, 10, '2021-12-08 12:20:26'),
(9, 50, 10, 0, 10, 0, 10, '2021-12-08 12:20:36'),
(10, 48, 15, 0, 15, 0, 15, '2021-12-08 12:21:33'),
(11, 48, 10, 0, 10, 5, 15, '2021-12-08 12:21:39'),
(12, 49, 9, 1, 10, 0, 10, '2021-12-08 12:24:28'),
(13, 49, 10, 0, 10, 0, 10, '2021-12-08 12:24:39'),
(14, 49, 9, 1, 10, 0, 10, '2021-12-08 12:30:50'),
(15, 49, 10, 0, 10, 0, 10, '2021-12-08 12:31:43'),
(16, 50, 9, 1, 10, 0, 10, '2021-12-08 13:07:01'),
(17, 50, 10, 0, 10, 0, 10, '2021-12-08 13:08:06'),
(18, 48, 9, 1, 10, 5, 15, '2021-12-08 15:11:33'),
(19, 48, 10, 0, 10, 5, 15, '2021-12-08 15:15:44'),
(20, 48, 9, 1, 10, 5, 15, '2021-12-08 17:04:38'),
(21, 48, 10, 0, 10, 5, 15, '2021-12-09 06:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_category_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_category_id`, `description`, `location`, `date`, `time_start`, `time_end`, `status`) VALUES
(62, 2, 'Monthly Pintakasi', 'LNU Dorm Grounds', '2021-12-02', '21:44:00', '22:44:00', NULL),
(65, 1, 'Reiciendis irure dol', 'LNU Dorm Grounds', '2021-12-03', '01:34:00', '02:34:00', NULL),
(66, 2, 'Vitae fugit est exp', 'LNU Dorm Grounds', '2021-12-07', '11:35:00', '11:35:00', 'Cancelled!');

-- --------------------------------------------------------

--
-- Table structure for table `event_attendance`
--

CREATE TABLE `event_attendance` (
  `id` int(11) NOT NULL,
  `rfid_id` varchar(100) NOT NULL,
  `event_id` int(15) NOT NULL,
  `event_date` varchar(100) NOT NULL,
  `time_in` varchar(100) NOT NULL,
  `time_out` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_attendance`
--

INSERT INTO `event_attendance` (`id`, `rfid_id`, `event_id`, `event_date`, `time_in`, `time_out`) VALUES
(25, 'D541EC2D', 65, '2021-12-03', '11:47 am', '11:47 am');

-- --------------------------------------------------------

--
-- Table structure for table `event_category`
--

CREATE TABLE `event_category` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_category`
--

INSERT INTO `event_category` (`id`, `event_name`) VALUES
(1, 'Meeting'),
(2, 'Clean Up Drive'),
(4, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `floor_category`
--

CREATE TABLE `floor_category` (
  `id` int(11) NOT NULL,
  `floor_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floor_category`
--

INSERT INTO `floor_category` (`id`, `floor_name`) VALUES
(1, '1st Floor'),
(2, '2nd Floor'),
(3, '3rd Floor'),
(4, '4th Floor');

-- --------------------------------------------------------

--
-- Table structure for table `log_book`
--

CREATE TABLE `log_book` (
  `id` int(11) NOT NULL,
  `rfid_id` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time_in` varchar(100) NOT NULL,
  `time_out` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_book`
--

INSERT INTO `log_book` (`id`, `rfid_id`, `date`, `time_in`, `time_out`) VALUES
(204, 'D541EC2D', '2021-12-03', '11:07 am', '11:08 am'),
(205, 'D541EC2D', '2021-12-09', '03:52 pm', '03:52 pm'),
(206, 'D541EC2D', '2021-12-09', '03:53 pm', '04:03 pm'),
(207, 'D541EC2D', '2021-12-09', '04:21 pm', '04:21 pm'),
(209, 'D541EC2D', '2021-12-09', '04:37 pm', '04:38 pm');

-- --------------------------------------------------------

--
-- Table structure for table `paid`
--

CREATE TABLE `paid` (
  `id` int(11) NOT NULL,
  `student_id` int(15) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `date_paid` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL,
  `receipt` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paid`
--

INSERT INTO `paid` (`id`, `student_id`, `date_from`, `date_to`, `date_paid`, `status`, `receipt`) VALUES
(310, 1800649, '2021-12-01', '2021-12-31', '2021-12-08 16:48:48', 1, ''),
(311, 1800649, '2021-12-01', '2021-12-31', '2021-12-08 18:22:12', 1, ''),
(312, 1800649, '2021-12-09', '2022-01-07', '2021-12-09 13:55:06', 1, ''),
(313, 1800649, '2021-12-01', '2021-12-31', '2021-12-09 15:52:29', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(100) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_report`
--

CREATE TABLE `payment_report` (
  `id` int(11) NOT NULL,
  `date_reports` timestamp NOT NULL DEFAULT current_timestamp(),
  `user` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_report`
--

INSERT INTO `payment_report` (`id`, `date_reports`, `user`, `details`) VALUES
(3, '2021-12-09 11:55:00', '`1800649` Jeremiah Embana', 'Set payment for Dec 09, 2021 - Jan 07, 2022'),
(4, '2021-12-09 13:53:02', '`1800649` Jeremiah Embana', 'Set payment for Nov 01, 2021 - Dec 31, 2021'),
(5, '2021-12-09 13:53:46', '`1800649` Jeremiah Embana', 'Set payment for Nov 01, 2021 - Nov 30, 2021'),
(6, '2021-12-09 13:54:39', '`1800649` Jeremiah Embana', 'Set payment for Dec 01, 2021 - Dec 31, 2021'),
(7, '2021-12-09 13:55:06', '`1800649` Jeremiah Embana', 'Paid for Dec 09, 2021 - Jan 07, 2022'),
(8, '2021-12-09 15:52:29', '`1800649` Jeremiah Embana', 'Paid for Dec 01, 2021 - Dec 31, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `id` int(11) NOT NULL,
  `student_id` int(15) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `feedback` varchar(255) DEFAULT NULL,
  `decline` varchar(255) DEFAULT NULL,
  `date_pending` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`id`, `student_id`, `equipment_id`, `note`, `feedback`, `decline`, `date_pending`, `status`) VALUES
(217, 1800649, 48, 'sfsdf', NULL, 'no', '2021-12-08 12:36:59', 2),
(218, 1800649, 49, 'borrow', NULL, 'nooo', '2021-12-08 13:04:28', 2),
(219, 1800649, 50, 'huramss', 'okk', NULL, '2021-12-08 13:06:50', 1),
(220, 1800649, 48, 'borrow', 'okayyy', NULL, '2021-12-08 15:11:14', 1),
(221, 1800649, 48, 'borrow', 'okay', NULL, '2021-12-08 16:58:10', 1),
(222, 1800649, 48, 'borrow', NULL, 'no', '2021-12-09 01:13:57', 2);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `student_id` int(15) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `course_id` int(15) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `privilege` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `guardian` varchar(100) NOT NULL,
  `gcontact` varchar(50) NOT NULL,
  `status` int(1) DEFAULT 0,
  `curr_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `student_id`, `lname`, `fname`, `mname`, `bdate`, `gender`, `course_id`, `contact`, `privilege`, `email`, `photo`, `address`, `guardian`, `gcontact`, `status`, `curr_date`) VALUES
(73, 1800435, 'Payne', 'Garrett', 'Olson', '2000-04-22', 'Male', 2, '07980798079', 'Non-Athlete', 'pifuz@mailinator.com', 'minato.png', 'Maiores tempora volu', 'Culpa odit rerum vel', '07980795555', 0, '2021-12-09 08:39:46'),
(77, 1800567, 'Pantas', 'Gia Nila', 'Pore', '2000-03-15', 'Female', 2, '09063827392', 'Non-Athlete', 'pantasgianila@gmail.com', 'yang.jpg', 'Brgy. 77 PC Village  Marasbaras Tacloban City, Leyte', 'Gil Pantas', '09837485737', 0, '2021-12-09 15:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `date_reports` timestamp NOT NULL DEFAULT current_timestamp(),
  `equipment_reports` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `date_reports`, `equipment_reports`, `details`) VALUES
(40, '2021-12-02 06:49:38', 'Pillow', 'Marked 5 Pillow as Unserviceable Equipment'),
(41, '2021-12-02 06:49:49', 'Pillow', 'Added 5 Pillow as Serviceable Equipment'),
(42, '2021-12-02 06:50:01', 'Blanket', 'Marked 5 Blanket as Unserviceable Equipment'),
(48, '2021-12-08 15:11:33', 'Bed Sheet', '`1800649` Jeremiah Embana borrowed  1 Bed Sheet'),
(50, '2021-12-08 17:04:38', 'Bed Sheet', '`1800649` Jeremiah Embana borrowed  1 Bed Sheet'),
(51, '2021-12-09 06:58:38', 'Bed Sheet', '`1800649` Jeremiah Embana returned  1 Bed Sheet');

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

CREATE TABLE `returns` (
  `id` int(11) NOT NULL,
  `student_id` int(15) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `date_return` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returns`
--

INSERT INTO `returns` (`id`, `student_id`, `equipment_id`, `date_return`) VALUES
(141, 1800649, 49, '2021-12-08 12:31:43'),
(142, 1800649, 50, '2021-12-08 13:08:06'),
(143, 1800649, 48, '2021-12-08 15:15:44'),
(144, 1800649, 48, '2021-12-09 06:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `rfid_setting`
--

CREATE TABLE `rfid_setting` (
  `id` int(11) NOT NULL,
  `setting_id` int(1) NOT NULL,
  `event_id` int(15) DEFAULT NULL,
  `status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rfid_setting`
--

INSERT INTO `rfid_setting` (`id`, `setting_id`, `event_id`, `status`) VALUES
(1, 1, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room` varchar(255) NOT NULL,
  `floor_category_id` int(11) NOT NULL,
  `room_category_id` int(11) NOT NULL,
  `occupants` bigint(255) DEFAULT 0,
  `occupancy` bigint(255) DEFAULT 0,
  `gender` varchar(100) NOT NULL,
  `status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room`, `floor_category_id`, `room_category_id`, `occupants`, `occupancy`, `gender`, `status`) VALUES
(1, '1-1', 1, 1, 1, 1, 'Male', 0),
(2, '1-2', 1, 2, 0, 10, 'Male', 1),
(3, '1-3', 1, 3, 0, 16, 'Male', 0),
(4, '1-4', 1, 4, 0, 16, 'Male', 0),
(5, '1-5', 1, 5, 0, 16, 'Male', 0),
(6, '2-1', 2, 1, 0, 15, 'Male', 0),
(7, '2-2', 2, 2, 0, 16, 'Male', 0),
(8, '2-3', 2, 3, 0, 16, 'Male', 0),
(9, '2-4', 2, 4, 0, 16, 'Male', 0),
(10, '2-5', 2, 5, 0, 16, 'Male', 0),
(11, '3-1', 3, 1, 0, 16, 'Female', 0),
(12, '3-2', 3, 2, 0, 16, 'Female', 1),
(13, '3-3', 3, 3, 0, 16, 'Female', 0),
(14, '3-4', 3, 4, 0, 16, 'Female', 0),
(15, '3-5', 3, 5, 0, 16, 'Female', 0),
(16, '4-1', 4, 1, 0, 16, 'Female', 0),
(17, '4-2', 4, 2, 0, 16, 'Female', 0),
(18, '4-3', 4, 3, 0, 16, 'Female', 0),
(19, '4-4', 4, 4, 0, 16, 'Female', 0),
(20, '4-5', 4, 5, 1, 16, 'Female', 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE `room_category` (
  `id` int(11) NOT NULL,
  `room_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`id`, `room_name`) VALUES
(1, 'Room 1'),
(2, 'Room 2'),
(3, 'Room 3'),
(4, 'Room 4'),
(5, 'Room 5');

-- --------------------------------------------------------

--
-- Table structure for table `room_chart`
--

CREATE TABLE `room_chart` (
  `id` int(15) NOT NULL,
  `room_id` int(15) NOT NULL,
  `occupants` int(50) DEFAULT NULL,
  `current_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_chart`
--

INSERT INTO `room_chart` (`id`, `room_id`, `occupants`, `current_date`) VALUES
(9, 7, 1, '2021-12-09 15:28:46'),
(10, 18, 1, '2021-12-09 15:29:05'),
(11, 7, 1, '2021-12-09 15:29:20'),
(12, 20, 2, '2021-12-09 15:29:28'),
(13, 20, 1, '2021-12-09 15:29:32'),
(14, 7, 0, '2021-12-09 15:29:35'),
(15, 7, 1, '2021-12-09 15:46:35'),
(16, 1, 1, '2021-12-09 15:46:41');

-- --------------------------------------------------------

--
-- Table structure for table `room_equipment`
--

CREATE TABLE `room_equipment` (
  `room_id` int(15) NOT NULL,
  `equipment_id` int(15) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_report`
--

CREATE TABLE `room_report` (
  `id` int(11) NOT NULL,
  `date_reports` timestamp NOT NULL DEFAULT current_timestamp(),
  `room_id` int(11) NOT NULL,
  `details` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_report`
--

INSERT INTO `room_report` (`id`, `date_reports`, `room_id`, `details`, `reason`) VALUES
(83, '2021-12-08 09:14:40', 11, 'Assignment of floor and room number for `1800293` Ursula Wade', 'Approved Student Registration'),
(84, '2021-12-08 09:15:53', 16, 'Changed Assignment of floor and room number for `1800293` Ursula Wade', 'Updated Student Record'),
(85, '2021-12-08 09:15:59', 16, 'Removed `1800293` Ursula Wade from floor&room number', 'Deleted Student Record'),
(86, '2021-12-08 09:59:22', 2, 'Occupancy increased by 2', 'Added double deck beds'),
(87, '2021-12-08 10:00:27', 2, 'Occupancy decreased by 1', 'Broken bed'),
(88, '2021-12-08 10:00:44', 2, 'Marked as Unavailable', 'Under maintenance'),
(89, '2021-12-08 10:01:07', 2, 'Marked as Available', 'Fixed maintenance'),
(90, '2021-12-09 06:55:51', 2, 'Marked as Unavailable', 'Under Maintenance'),
(91, '2021-12-09 06:56:15', 12, 'Marked as Unavailable', 'Under Maintenance'),
(92, '2021-12-09 06:56:38', 1, 'Occupancy decreased by 14', 'For sample'),
(93, '2021-12-09 08:02:21', 11, 'Assignment of floor and room number for `1800567` Gia Nila Pantas', 'Approved Student Registration'),
(94, '2021-12-09 08:18:14', 11, 'Removed `1800567` Gia Nila Pantas from floor&room number', 'Deleted Student Record'),
(95, '2021-12-09 08:19:39', 11, 'Assignment of floor and room number for `1800567` Gia Nila Pantas', 'Approved Student Registration'),
(96, '2021-12-09 08:30:40', 11, 'Assignment of floor and room number for `1800567` Gia Nila Pantas', 'Approved Student Registration'),
(97, '2021-12-09 08:31:48', 11, 'Removed `1800567` Gia Nila Pantas from floor&room number', 'Deleted Student Record'),
(98, '2021-12-09 08:36:27', 11, 'Assignment of floor and room number for `1800567` Gia Nila Pantas', 'Approved Student Registration'),
(99, '2021-12-09 08:37:56', 3, 'Assignment of floor and room number for `1800234` Sebastian Gregory', 'Approved Student Registration'),
(100, '2021-12-09 08:38:30', 11, 'Removed `1800567` Gia Nila Pantas from floor&room number', 'Deleted Student Record'),
(101, '2021-12-09 08:38:35', 3, 'Removed `1800234` Sebastian Gregory from floor&room number', 'Deleted Student Record'),
(102, '2021-12-09 15:14:32', 11, 'Assignment of floor and room number for `1800567` Gia Nila Pantas', 'Approved Student Registration'),
(103, '2021-12-09 15:17:34', 3, 'Changed Assignment of floor and room number for `1800649` Jeremiah Embana', 'Updated Student Record'),
(104, '2021-12-09 15:17:46', 13, 'Changed Assignment of floor and room number for `1800567` Gia Nila Pantas', 'Updated Student Record'),
(105, '2021-12-09 15:17:57', 11, 'Changed Assignment of floor and room number for `1800567` Gia Nila Pantas', 'Updated Student Record'),
(106, '2021-12-09 15:18:04', 1, 'Changed Assignment of floor and room number for `1800649` Jeremiah Embana', 'Updated Student Record'),
(107, '2021-12-09 15:19:58', 11, 'Removed `1800567` Gia Nila Pantas from floor&room number', 'Deleted Student Record'),
(108, '2021-12-09 15:28:46', 7, 'Assignment of floor and room number for `1800234` Nehru Villarreal Connor Hewitt', 'Approved Student Registration'),
(109, '2021-12-09 15:29:05', 18, 'Assignment of floor and room number for `1800435` Petra Branch Kaden Suarez', 'Approved Student Registration'),
(110, '2021-12-09 15:29:20', 7, 'Changed Assignment of floor and room number for `1800234` Nehru Villarreal Connor Hewitt', 'Updated Student Record'),
(111, '2021-12-09 15:29:28', 20, 'Changed Assignment of floor and room number for `1800435` Petra Branch Kaden Suarez', 'Updated Student Record'),
(112, '2021-12-09 15:29:32', 20, 'Removed `1800435` Petra Branch Kaden Suarez from floor&room number', 'Deleted Student Record'),
(113, '2021-12-09 15:29:35', 7, 'Removed `1800234` Nehru Villarreal Connor Hewitt from floor&room number', 'Deleted Student Record'),
(114, '2021-12-09 15:46:35', 7, 'Changed Assignment of floor and room number for `1800649` Jeremiah Embana', 'Updated Student Record'),
(115, '2021-12-09 15:46:41', 1, 'Changed Assignment of floor and room number for `1800649` Jeremiah Embana', 'Updated Student Record');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `function` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `function`) VALUES
(1, 'Log Book MODE'),
(2, 'Event Attendance MODE');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(15) NOT NULL,
  `rfid` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `floor_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `actualroom_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `privilege` varchar(255) NOT NULL,
  `guardian` varchar(50) NOT NULL,
  `guardian_contact` varchar(20) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `unpaid_total` int(15) DEFAULT 0,
  `status` int(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `rfid`, `password`, `firstname`, `middlename`, `lastname`, `bdate`, `gender`, `address`, `contact`, `floor_id`, `room_id`, `actualroom_id`, `email`, `privilege`, `guardian`, `guardian_contact`, `photo`, `course_id`, `unpaid_total`, `status`, `created_at`, `verified_at`) VALUES
(1800649, 'D541EC2D', '$2y$10$rkElmAx2CFbYh7jM56bXxuM/.zkyucOb62v4ua0rppP56gt2KQYxS', 'Jeremiah', 'Orpeza', 'Embana', '1999-11-10', 'Male', 'Brgy. 76 Fatima Village Tacloban City, Leyte', '09063774018', 1, 1, 1, 'jeremiahembana22@gmail.com', 'Non-Athlete', 'Jeany Embana', '09613057822', 'MAYA.png', 2, 1, 1, '2021-12-03 02:51:38', '2021-12-02 19:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_at`) VALUES
(1, 'mis', '$2y$10$8FPnQu.E7l/JDNyHucswQeZ2MhFe7fc1bkLdUZqCFWRGJCEkHVqHW', 'mis', 'mis', '', '2021-06-24 07:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `transient`
--

CREATE TABLE `transient` (
  `transient_id` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transient`
--

INSERT INTO `transient` (`transient_id`, `firstname`, `lastname`, `gender`, `address`, `contact`, `status`, `created_at`) VALUES
('GKF9168', 'Ivor', 'Chandler', 'Male', 'Commodi ducimus et ', '09099090', 1, '2021-11-07 17:44:53'),
('KRF5062', 'Jasmine', 'Young', 'Female', 'Architecto ducimus ', '09765464433', 0, '2021-12-02 16:26:32');

-- --------------------------------------------------------

--
-- Table structure for table `unpaid`
--

CREATE TABLE `unpaid` (
  `id` int(11) NOT NULL,
  `student_id` int(15) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `date_unpaid` timestamp NOT NULL DEFAULT current_timestamp(),
  `deadline` date NOT NULL,
  `status` int(1) DEFAULT NULL,
  `receipt` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unpaid`
--

INSERT INTO `unpaid` (`id`, `student_id`, `date_from`, `date_to`, `date_unpaid`, `deadline`, `status`, `receipt`) VALUES
(47, 1800649, '2021-11-01', '2021-11-30', '2021-12-09 13:53:46', '2021-11-15', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verification`
--

INSERT INTO `verification` (`id`, `email`, `token`) VALUES
(10, 'gowoqox@mailinator.com', '768e78024aa8fdb9b8fe87be86f64745745ca4b50a'),
(13, 'terrorajalyne@gmail.com', '768e78024aa8fdb9b8fe87be86f64745dd032de013'),
(14, 'cajomulynu@mailinator.com', '768e78024aa8fdb9b8fe87be86f647458efa36675f'),
(15, 'mabube@mailinator.com', '768e78024aa8fdb9b8fe87be86f64745b362292a8d'),
(16, 'fajipyh@mailinator.com', '768e78024aa8fdb9b8fe87be86f647452415fc9a85'),
(18, 'pajeruwome@mailinator.com', '768e78024aa8fdb9b8fe87be86f647456b6216c799'),
(19, 'tykudafa@mailinator.com', '768e78024aa8fdb9b8fe87be86f6474546276e7e94'),
(20, 'zujekavor@mailinator.com', '768e78024aa8fdb9b8fe87be86f647454e3ab2452e'),
(21, 'kamyxijuse@mailinator.com', '768e78024aa8fdb9b8fe87be86f64745c235917106'),
(22, 'rece@mailinator.com', '768e78024aa8fdb9b8fe87be86f6474584cd9f97ee'),
(23, 'hexymow@mailinator.com', '768e78024aa8fdb9b8fe87be86f64745db23909286'),
(24, 'terrorajalyne@gmail.com', '768e78024aa8fdb9b8fe87be86f64745557af0f3d8'),
(25, 'lynettepomasin@gmail.com', '768e78024aa8fdb9b8fe87be86f647451a32d8bba4'),
(26, 'netexek@mailinator.com', '768e78024aa8fdb9b8fe87be86f64745a207988c2c'),
(27, 'mofawyk@mailinator.com', '768e78024aa8fdb9b8fe87be86f64745f782d61222'),
(28, 'pujeresapa@mailinator.com', '768e78024aa8fdb9b8fe87be86f647451b3b5b88c9'),
(29, 'ziparikehi@mailinator.com', '768e78024aa8fdb9b8fe87be86f647452a199b169b'),
(30, 'qigice@mailinator.com', '768e78024aa8fdb9b8fe87be86f64745e76c67d097'),
(31, 'disevira@mailinator.com', '768e78024aa8fdb9b8fe87be86f647454937255ca7'),
(32, 'tajiwar@mailinator.com', '768e78024aa8fdb9b8fe87be86f64745c865eb9db7'),
(33, 'pehusiqyx@mailinator.com', '768e78024aa8fdb9b8fe87be86f64745ee52f2406d'),
(34, 'zusa@mailinator.com', '768e78024aa8fdb9b8fe87be86f6474572806b01e1'),
(35, 'qusobo@mailinator.com', '768e78024aa8fdb9b8fe87be86f6474509e46260c4'),
(36, 'xeful@mailinator.com', '768e78024aa8fdb9b8fe87be86f647451723dc493d'),
(37, 'namekytydi@mailinator.com', '768e78024aa8fdb9b8fe87be86f64745065d9538e9'),
(41, 'tywo@mailinator.com', '768e78024aa8fdb9b8fe87be86f64745c61db7dc10'),
(42, 'pantasgianila@gmail.com', '768e78024aa8fdb9b8fe87be86f6474538ceb630fd'),
(43, 'pantasgianila@gmail.com', '768e78024aa8fdb9b8fe87be86f64745a7763aaf76'),
(44, 'dyginykih@mailinator.com', '768e78024aa8fdb9b8fe87be86f647453bb2188805'),
(45, 'pantasgianila@gmail.com', '768e78024aa8fdb9b8fe87be86f64745b5a3317805'),
(46, 'bodafaje@mailinator.com', '768e78024aa8fdb9b8fe87be86f6474546e4d7b734'),
(47, 'pantasgianila@gmail.com', '768e78024aa8fdb9b8fe87be86f6474596cd685fcf'),
(48, 'pantasgianila@gmail.com', '768e78024aa8fdb9b8fe87be86f647454422c5ff86'),
(49, 'pantasgianila@gmail.com', '768e78024aa8fdb9b8fe87be86f647457722efa923'),
(50, 'pantasgianila@gmail.com', '768e78024aa8fdb9b8fe87be86f64745a88137cda2'),
(51, 'vegufa@mailinator.com', '768e78024aa8fdb9b8fe87be86f64745680422268a'),
(52, 'pantasgianila@gmail.com', '768e78024aa8fdb9b8fe87be86f64745306e654fe7'),
(53, 'jafud@mailinator.com', '768e78024aa8fdb9b8fe87be86f64745119f7d8d96'),
(54, 'cawoqev@mailinator.com', '768e78024aa8fdb9b8fe87be86f6474592b491a5a5');

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE `violations` (
  `id` int(11) NOT NULL,
  `student_id` int(15) NOT NULL,
  `violation` varchar(255) NOT NULL,
  `punishment` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`id`, `student_id`, `violation`, `punishment`, `date`) VALUES
(24, 1800649, 'Doloribus dolor eos ', 'Harum molestias est ', '2021-12-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `equipment_id` (`equipment_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkin`
--
ALTER TABLE `checkin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transient_id` (`transient_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `floor_id` (`floor_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transient_id` (`transient_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `floor_id` (`floor_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `equipment_chart`
--
ALTER TABLE `equipment_chart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipment_id` (`equipment_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_category_id` (`event_category_id`);

--
-- Indexes for table `event_attendance`
--
ALTER TABLE `event_attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rfid_id` (`rfid_id`),
  ADD KEY `event_attendance_ibfk_2` (`event_id`);

--
-- Indexes for table `event_category`
--
ALTER TABLE `event_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floor_category`
--
ALTER TABLE `floor_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_book`
--
ALTER TABLE `log_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_book_ibfk_1` (`rfid_id`);

--
-- Indexes for table `paid`
--
ALTER TABLE `paid`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_report`
--
ALTER TABLE `payment_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `equipment_id` (`equipment_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course` (`course_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returns`
--
ALTER TABLE `returns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `equipment_id` (`equipment_id`);

--
-- Indexes for table `rfid_setting`
--
ALTER TABLE `rfid_setting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting_id` (`setting_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `floor_category_id` (`floor_category_id`),
  ADD KEY `room_category_id` (`room_category_id`);

--
-- Indexes for table `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_chart`
--
ALTER TABLE `room_chart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room_report`
--
ALTER TABLE `room_report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `rfid_id` (`rfid`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `floor_id` (`floor_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `actualroom_id` (`actualroom_id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transient`
--
ALTER TABLE `transient`
  ADD PRIMARY KEY (`transient_id`);

--
-- Indexes for table `unpaid`
--
ALTER TABLE `unpaid`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `violations`
--
ALTER TABLE `violations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=757;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `checkin`
--
ALTER TABLE `checkin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `equipment_chart`
--
ALTER TABLE `equipment_chart`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `event_attendance`
--
ALTER TABLE `event_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `event_category`
--
ALTER TABLE `event_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `floor_category`
--
ALTER TABLE `floor_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `log_book`
--
ALTER TABLE `log_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `paid`
--
ALTER TABLE `paid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `payment_report`
--
ALTER TABLE `payment_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `returns`
--
ALTER TABLE `returns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `rfid_setting`
--
ALTER TABLE `rfid_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `room_category`
--
ALTER TABLE `room_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `room_chart`
--
ALTER TABLE `room_chart`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `room_report`
--
ALTER TABLE `room_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `unpaid`
--
ALTER TABLE `unpaid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `verification`
--
ALTER TABLE `verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrow_ibfk_2` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `checkin`
--
ALTER TABLE `checkin`
  ADD CONSTRAINT `checkin_ibfk_1` FOREIGN KEY (`transient_id`) REFERENCES `transient` (`transient_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `checkin_ibfk_2` FOREIGN KEY (`floor_id`) REFERENCES `floor_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `checkin_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `room_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`transient_id`) REFERENCES `transient` (`transient_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`floor_id`) REFERENCES `floor_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `checkout_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `room_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `equipments`
--
ALTER TABLE `equipments`
  ADD CONSTRAINT `equipments_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `equipment_chart`
--
ALTER TABLE `equipment_chart`
  ADD CONSTRAINT `equipment_chart_ibfk_1` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`event_category_id`) REFERENCES `event_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_attendance`
--
ALTER TABLE `event_attendance`
  ADD CONSTRAINT `event_attendance_ibfk_1` FOREIGN KEY (`rfid_id`) REFERENCES `students` (`rfid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_attendance_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `log_book`
--
ALTER TABLE `log_book`
  ADD CONSTRAINT `log_book_ibfk_1` FOREIGN KEY (`rfid_id`) REFERENCES `students` (`rfid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paid`
--
ALTER TABLE `paid`
  ADD CONSTRAINT `paid_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pending`
--
ALTER TABLE `pending`
  ADD CONSTRAINT `pending_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pending_ibfk_2` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `returns`
--
ALTER TABLE `returns`
  ADD CONSTRAINT `returns_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `returns_ibfk_2` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rfid_setting`
--
ALTER TABLE `rfid_setting`
  ADD CONSTRAINT `rfid_setting_ibfk_1` FOREIGN KEY (`setting_id`) REFERENCES `setting` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rfid_setting_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`floor_category_id`) REFERENCES `floor_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rooms_ibfk_2` FOREIGN KEY (`room_category_id`) REFERENCES `room_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room_chart`
--
ALTER TABLE `room_chart`
  ADD CONSTRAINT `room_chart_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room_report`
--
ALTER TABLE `room_report`
  ADD CONSTRAINT `room_report_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_3` FOREIGN KEY (`floor_id`) REFERENCES `floor_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_4` FOREIGN KEY (`room_id`) REFERENCES `room_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_ibfk_5` FOREIGN KEY (`actualroom_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `unpaid`
--
ALTER TABLE `unpaid`
  ADD CONSTRAINT `unpaid_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `violations`
--
ALTER TABLE `violations`
  ADD CONSTRAINT `violations_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
