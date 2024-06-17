<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hour;
use App\Models\Course;
use App\Models\Blocks;
use App\Models\Discipline;
use App\Models\User;
use App\Models\Room;
use App\Models\Semester;
use Illuminate\Http\RedirectResponse;

class HourController extends Controller
{
    public function show_dsm()
    {
        //dsm1
        $courses = Course::all();
        $hour_s = Hour::find(8);
        $hour_seg = Hour::find(10);
        $hour_t = Hour::find(12);
        $hour_qua = Hour::find(14);
        $hour_qui = Hour::find(15);
        $hour_sex = Hour::find(16);

        //dsm2
        $hour_segunda = Hour::find(1);
        $hour_terca = Hour::find(2);
        $hour_quarta = Hour::find(3);
        $hour_q= Hour::find(4);
        $hour_quinta = Hour::find(5);
        $hour_sexta = Hour::find(6);
        $hour_sex_2 = Hour::find(7);

        //SN 1
         // Sistemas Navais 1 SEMESTRE
         $courses = Course::all();
         $hour_seg_7 = Hour::find(17);
         $hour_seg_9 = Hour::find(18);
         $hour_seg_11 = Hour::find(19);
         $hour_ter_7 = Hour::find(20);
         $hour_ter_9 = Hour::find(21);
         $hour_qua_7 = Hour::find(22);
         $hour_qua_9 = Hour::find(23);
         $hour_qua_11 = Hour::find(24);
         $hour_qui_7 = Hour::find(25);
         $hour_qui_9 = Hour::find(26);
         $hour_qui_11 = Hour::find(27);
         $hour_sex_9 = Hour::find(28);

         // SISTEMAS NAVAIS 2 SEMESTRE
        $sn2_seg_7 = Hour::find(29);
        $sn2_seg_9 = Hour::find(30);
        $sn2_seg_11 = Hour::find(31);
        $sn2_ter_7 = Hour::find(32);
        $sn2_ter_9 = Hour::find(33);
        $sn2_qua_7 = Hour::find(34);
        $sn2_qua_9 = Hour::find(35);
        $sn2_qua_11 = Hour::find(36);
        $sn2_qui_7 = Hour::find(37);
        $sn2_qui_9 = Hour::find(38);
        $sn2_sex_7 = Hour::find(39);
        $sn2_sex_9 = Hour::find(40);

        // SISTEMAS NAVAIS 3 SEMESTRE
        $sn3_seg_7 = Hour::find(41);
        $sn3_seg_9 = Hour::find(42);
        $sn3_seg_11 = Hour::find(43);
        $sn3_ter_7 = Hour::find(44);
        $sn3_ter_9 = Hour::find(45);
        $sn3_qua_7 = Hour::find(46);
        $sn3_qua_9 = Hour::find(47);
        $sn3_qua_11 = Hour::find(48);
        $sn3_qui_9 = Hour::find(49);
        $sn3_qui_11 = Hour::find(50);
        $sn3_sex_7 = Hour::find(51);
        $sn3_sex_9 = Hour::find(52);

        //SISTEMAS NAVAIS 4 SEMESTRE
        $sn4_seg_9 = Hour::find(53);
        $sn4_seg_11 = Hour::find(54);
        $sn4_ter_9 = Hour::find(55);
        $sn4_ter_11 = Hour::find(56);
        $sn4_qua_7 = Hour::find(57);
        $sn4_qua_9 = Hour::find(58);
        $sn4_qua_11 = Hour::find(59);
        $sn4_qui_7 = Hour::find(60);
        $sn4_qui_9 = Hour::find(61);
        $sn4_qui_11 = Hour::find(62);
        $sn4_sex_9 = Hour::find(63);
        $sn4_sex_11 = Hour::find(64);

        // sn 5 semestre
        $sn5_seg_7 = Hour::find(65);
        $sn5_seg_9 = Hour::find(66);
        $sn5_seg_11 = Hour::find(67);
        $sn5_ter_7 = Hour::find(68);
        $sn5_ter_9 = Hour::find(69);
        $sn5_qua_9 = Hour::find(70);
        $sn5_qua_11 = Hour::find(71);
        $sn5_qui_7 = Hour::find(72);
        $sn5_qui_9 = Hour::find(73);
        $sn5_qui_11 = Hour::find(74);
        $sn5_sex_7 = Hour::find(75);
        $sn5_sex_9 = Hour::find(76);

        // sn 6 semestre
        $sn6_seg_7 = Hour::find(77);
        $sn6_seg_9 = Hour::find(78);
        $sn6_seg_11 = Hour::find(79);
        $sn6_ter_11 = Hour::find(80);
        $sn6_qua_7 = Hour::find(81);
        $sn6_qua_9 = Hour::find(82);
        $sn6_qua_11 = Hour::find(83);
        $sn6_qui_7 = Hour::find(84);
        $sn6_qui_9 = Hour::find(85);
        $sn6_sex_7 = Hour::find(86);
        $sn6_sex_9 = Hour::find(87);
        $sn6_sex_11 = Hour::find(88);

        // cn 1 semestre
        $cn1_seg_9 = Hour::find(89);
        $cn1_seg_11 = Hour::find(90);
        $cn1_ter_7 = Hour::find(91);
        $cn1_ter_9 = Hour::find(92);
        $cn1_ter_11 = Hour::find(93);
        $cn1_qua_7 = Hour::find(94);
        $cn1_qua_9 = Hour::find(95);
        $cn1_qua_11 = Hour::find(96);
        $cn1_qui_7 = Hour::find(97);
        $cn1_qui_9 = Hour::find(98);
        $cn1_sex_7 = Hour::find(99);
        $cn1_sex_9 = Hour::find(100);

        // cn 2 semestre
        $cn2_seg_7 = Hour::find(101);
        $cn2_seg_9 = Hour::find(102);
        $cn2_seg_11 = Hour::find(103);
        $cn2_ter_7 = Hour::find(104);
        $cn2_ter_9 = Hour::find(105);
        $cn2_qua_9 = Hour::find(106);
        $cn2_qua_11 = Hour::find(107);
        $cn2_qui_7 = Hour::find(108);
        $cn2_qui_9 = Hour::find(109);
        $cn2_qui_11 = Hour::find(110);
        $cn2_sex_7 = Hour::find(111);
        $cn2_sex_9 = Hour::find(112);

        // cn 3 semestre
        $cn3_seg_9 = Hour::find(113);
        $cn3_seg_11 = Hour::find(114);
        $cn3_ter_7 = Hour::find(115);
        $cn3_ter_9 = Hour::find(116);
        $cn3_qua_7 = Hour::find(117);
        $cn3_qua_9 = Hour::find(118);
        $cn3_qua_11 = Hour::find(119);
        $cn3_qui_7 = Hour::find(120);
        $cn3_qui_9 = Hour::find(121);
        $cn3_qui_11 = Hour::find(122);
        $cn3_sex_7 = Hour::find(123);
        $cn3_sex_9 = Hour::find(124);

        // cn 4 semestre
        $cn4_seg_7 = Hour::find(125);
        $cn4_seg_9 = Hour::find(126);
        $cn4_ter_7 = Hour::find(127);
        $cn4_ter_9 = Hour::find(128);
        $cn4_qua_7 = Hour::find(129);
        $cn4_qua_9 = Hour::find(130);
        $cn4_qua_11 = Hour::find(131);
        $cn4_qui_9 = Hour::find(132);
        $cn4_qui_11 = Hour::find(133);
        $cn4_sex_7 = Hour::find(134);
        $cn4_sex_9 = Hour::find(135);
        $cn4_sex_11 = Hour::find(136);

        // cn 5 semestre
        $cn5_seg_9 = Hour::find(137);
        $cn5_seg_11 = Hour::find(138);
        $cn5_ter_7 = Hour::find(139);
        $cn5_ter_9 = Hour::find(140);
        $cn5_ter_11 = Hour::find(141);
        $cn5_qua_7 = Hour::find(142);
        $cn5_qua_9 = Hour::find(143);
        $cn5_qui_9 = Hour::find(144);
        $cn5_qui_11 = Hour::find(145);
        $cn5_sex_7 = Hour::find(146);
        $cn5_sex_9 = Hour::find(147);
        $cn5_sex_11 = Hour::find(148);

        // cn 6 semestre
        $cn6_seg_7 = Hour::find(149);
        $cn6_seg_9 = Hour::find(150);
        $cn6_ter_7 = Hour::find(151);
        $cn6_ter_9 = Hour::find(152);
        $cn6_ter_11 = Hour::find(153);
        $cn6_qua_7 = Hour::find(154);
        $cn6_qua_9 = Hour::find(155);
        $cn6_qui_7 = Hour::find(156);
        $cn6_qui_9 = Hour::find(157);
        $cn6_sex_7 = Hour::find(158);
        $cn6_sex_9 = Hour::find(159);
        $cn6_sex_11 = Hour::find(160);

        // gpi 1 semestre
        $gp1_seg_7 = Hour::find(161);
        $gp1_seg_9 = Hour::find(162);
        $gp1_ter_7 = Hour::find(163);
        $gp1_ter_9 = Hour::find(164);
        $gp1_qua_7 = Hour::find(165);
        $gp1_qua_9 = Hour::find(166);
        $gp1_qui_7 = Hour::find(167);
        $gp1_qui_9 = Hour::find(168);
        $gp1_sex_7 = Hour::find(169);
        $gp1_sex_9 = Hour::find(170);

        // gpi 2 semestre
        $gp2_seg_7 = Hour::find(171);
        $gp2_seg_9 = Hour::find(172);
        $gp2_ter_7 = Hour::find(173);
        $gp2_ter_9 = Hour::find(174);
        $gp2_qua_7 = Hour::find(175);
        $gp2_qua_9 = Hour::find(176);
        $gp2_qui_7 = Hour::find(177);
        $gp2_qui_9 = Hour::find(178);
        $gp2_sex_7 = Hour::find(179);
        $gp2_sex_9 = Hour::find(180);

        // gpi 3 semestre
        $gp3_seg_7 = Hour::find(181);
        $gp3_seg_9 = Hour::find(182);
        $gp3_ter_7 = Hour::find(183);
        $gp3_ter_9 = Hour::find(184);
        $gp3_qua_7 = Hour::find(185);
        $gp3_qua_9 = Hour::find(186);
        $gp3_qui_7 = Hour::find(187);
        $gp3_qui_9 = Hour::find(188);
        $gp3_sex_7 = Hour::find(189);
        $gp3_sex_9 = Hour::find(190);

        // gpi 4 semestre
        $gp4_seg_7 = Hour::find(191);
        $gp4_seg_9 = Hour::find(192);
        $gp4_ter_7 = Hour::find(193);
        $gp4_ter_9 = Hour::find(194);
        $gp4_qua_7 = Hour::find(195);
        $gp4_qua_9 = Hour::find(196);
        $gp4_qui_7 = Hour::find(197);
        $gp4_qui_9 = Hour::find(198);
        $gp4_sex_7 = Hour::find(199);
        $gp4_sex_9 = Hour::find(200);

        // gpi 5 semestre
        $gp5_seg_7 = Hour::find(201);
        $gp5_seg_9 = Hour::find(202);
        $gp5_ter_7 = Hour::find(203);
        $gp5_ter_9 = Hour::find(204);
        $gp5_qua_7 = Hour::find(205);
        $gp5_qua_9 = Hour::find(206);
        $gp5_qui_7 = Hour::find(207);
        $gp5_qui_9 = Hour::find(208);
        $gp5_sex_7 = Hour::find(209);
        $gp5_sex_9 = Hour::find(210);

        // gpi 6 semestre
        $gp6_seg_7 = Hour::find(211);
        $gp6_seg_9 = Hour::find(212);
        $gp6_ter_7 = Hour::find(213);
        $gp6_ter_9 = Hour::find(214);
        $gp6_qua_7 = Hour::find(215);
        $gp6_qua_9 = Hour::find(216);
        $gp6_qui_7 = Hour::find(217);
        $gp6_qui_9 = Hour::find(218);
        $gp6_sex_7 = Hour::find(219);
        $gp6_sex_9 = Hour::find(220);

        // ma 1 semestre
        $ma1_seg_7 = Hour::find(221);
        $ma1_seg_9 = Hour::find(222);
        $ma1_ter_7 = Hour::find(223);
        $ma1_ter_9 = Hour::find(224);
        $ma1_qua_7 = Hour::find(225);
        $ma1_qua_9 = Hour::find(226);
        $ma1_qui_7 = Hour::find(227);
        $ma1_qui_9 = Hour::find(228);
        $ma1_sex_7 = Hour::find(229);
        $ma1_sex_9 = Hour::find(230);
        $ma1_sab_7 = Hour::find(231);
        $ma1_sab_9 = Hour::find(232);

        // ma 2 semestre
        $ma2_seg_7 = Hour::find(233);
        $ma2_seg_9 = Hour::find(234);
        $ma2_ter_7 = Hour::find(235);
        $ma2_ter_9 = Hour::find(236);
        $ma2_qua_7 = Hour::find(237);
        $ma2_qua_9 = Hour::find(238);
        $ma2_qua_11 = Hour::find(239);
        $ma2_qui_7 = Hour::find(240);
        $ma2_qui_9 = Hour::find(241);
        $ma2_qui_11 = Hour::find(242);
        $ma2_sex_7 = Hour::find(243);
        $ma2_sex_9 = Hour::find(244);
        $ma2_sex_11 = Hour::find(245);

        // ma 3 semestre
        $ma3_seg_7 = Hour::find(246);
        $ma3_seg_9 = Hour::find(247);
        $ma3_seg_11 = Hour::find(248);
        $ma3_ter_9 = Hour::find(249);
        $ma3_ter_11 = Hour::find(250);
        $ma3_qua_7 = Hour::find(251);
        $ma3_qua_9 = Hour::find(252);
        $ma3_qua_11 = Hour::find(253);
        $ma3_qui_7 = Hour::find(254);
        $ma3_qui_9 = Hour::find(255);
        $ma3_sex_9 = Hour::find(256);
        $ma3_sex_11 = Hour::find(257);

        // ma 4 semestre
        $ma4_seg_7 = Hour::find(258);
        $ma4_seg_9 = Hour::find(259);
        $ma4_seg_11 = Hour::find(260);
        $ma4_ter_7 = Hour::find(261);
        $ma4_ter_9 = Hour::find(262);
        $ma4_qua_7 = Hour::find(263);
        $ma4_qua_9 = Hour::find(264);
        $ma4_qui_7 = Hour::find(265);
        $ma4_qui_9 = Hour::find(266);
        $ma4_qui_11 = Hour::find(267);
        $ma4_sex_9 = Hour::find(268);
        $ma4_sex_11 = Hour::find(269);

        // ma 5 semestre
        $ma5_seg_7 = Hour::find(270);
        $ma5_seg_9 = Hour::find(271);
        $ma5_seg_11 = Hour::find(272);
        $ma5_ter_7 = Hour::find(273);
        $ma5_ter_9 = Hour::find(274);
        $ma5_qua_7 = Hour::find(275);
        $ma5_qua_9 = Hour::find(276);
        $ma5_qui_9 = Hour::find(277);
        $ma5_qui_11 = Hour::find(278);
        $ma5_sex_7 = Hour::find(279);
        $ma5_sex_9 = Hour::find(280);
        $ma5_sex_11 = Hour::find(281);

        // ma 6 semestre
        $ma6_seg_9 = Hour::find(282);
        $ma6_seg_11 = Hour::find(283);
        $ma6_ter_9 = Hour::find(284);
        $ma6_ter_11 = Hour::find(285);
        $ma6_qua_7 = Hour::find(286);
        $ma6_qua_9 = Hour::find(287);
        $ma6_qua_11 = Hour::find(288);
        $ma6_qui_7 = Hour::find(289);
        $ma6_qui_9 = Hour::find(290);
        $ma6_qui_11 = Hour::find(291);

        // si 3 semestre
        $si3_seg_9 = Hour::find(293);
        $si3_seg_11 = Hour::find(294);
        $si3_ter_9 = Hour::findOrFail(295);
        $si3_ter_11 = Hour::findOrFail(296);
        $si3_qua_7 = Hour::findOrFail(297);
        $si3_qua_9 = Hour::findOrFail(298);
        $si3_qua_11 = Hour::findOrFail(299);
        $si3_qui_9 = Hour::findOrFail(300);
        $si3_qui_11 = Hour:: findOrFail(301);


        return view('pages.grade',
        compact(
        // dsm 1 e 2 semestre
        'courses','hour_s','hour_seg','hour_t','hour_qua','hour_qui','hour_sex',
        'hour_segunda','hour_terca','hour_quarta','hour_q','hour_quinta','hour_sexta','hour_sex_2',

        // sn 1 semestre
        'hour_seg_7','hour_seg_9','hour_seg_11',
        'hour_ter_7','hour_ter_9','hour_qua_7','hour_qua_9','hour_qua_11',
        'hour_qui_7','hour_qui_9','hour_qui_11','hour_sex_9',

        // sn 2 semestre
        'sn2_seg_7','sn2_seg_9','sn2_seg_11','sn2_ter_7','sn2_ter_9','sn2_qua_7',
        'sn2_qua_9','sn2_qua_11','sn2_qui_7','sn2_qui_9','sn2_sex_7','sn2_sex_9',

        // sn 3 semestre
        'sn3_seg_7','sn3_seg_9','sn3_seg_11','sn3_ter_7','sn3_ter_9','sn3_qua_7',
        'sn3_qua_9','sn3_qua_11','sn3_qui_9','sn3_qui_11','sn3_sex_7','sn3_sex_9',

        // sn 4 semestre
        'sn4_seg_9','sn4_seg_11','sn4_ter_9','sn4_ter_11','sn4_qua_7','sn4_qua_9',
        'sn4_qua_11','sn4_qui_7','sn4_qui_9','sn4_qui_11','sn4_sex_9','sn4_sex_11',

        // sn 5 semestre
        'sn5_seg_7','sn5_seg_9','sn5_seg_11','sn5_ter_7','sn5_ter_9','sn5_qua_9',
        'sn5_qua_11','sn5_qui_7','sn5_qui_9','sn5_qui_11','sn5_sex_7','sn5_sex_9',

        // sn 6 semestre
        'sn6_seg_7','sn6_seg_9','sn6_seg_11','sn6_ter_11','sn6_qua_7','sn6_qua_9',
        'sn6_qua_11','sn6_qui_7','sn6_qui_9','sn6_sex_7','sn6_sex_9','sn6_sex_11',

        // cn 1 semestre
        'cn1_seg_9','cn1_seg_11','cn1_ter_7','cn1_ter_9','cn1_ter_11','cn1_qua_7',
        'cn1_qua_9','cn1_qua_11','cn1_qui_7','cn1_qui_9','cn1_sex_7','cn1_sex_9',

        // cn 2 semestre
        'cn2_seg_7','cn2_seg_9','cn2_seg_11','cn2_ter_7','cn2_ter_9','cn2_qua_9',
        'cn2_qua_11','cn2_qui_7','cn2_qui_9','cn2_qui_11','cn2_sex_7','cn2_sex_9',

        // cn 3 semestre
        'cn3_seg_9','cn3_seg_11','cn3_ter_7','cn3_ter_9','cn3_qua_7','cn3_qua_9',
        'cn3_qua_11','cn3_qui_7','cn3_qui_9','cn3_qui_11','cn3_sex_7','cn3_sex_9',

        // cn 4 semestre
        'cn4_seg_7','cn4_seg_9','cn4_ter_7','cn4_ter_9','cn4_qua_7','cn4_qua_9',
        'cn4_qua_11','cn4_qui_9','cn4_qui_11','cn4_sex_7','cn4_sex_9','cn4_sex_11',

        // cn 5 semestre
        'cn5_seg_9','cn5_seg_11','cn5_ter_7','cn5_ter_9','cn5_ter_11','cn5_qua_7',
        'cn5_qua_9','cn5_qui_9','cn5_qui_11','cn5_sex_7','cn5_sex_9','cn5_sex_11',

        // cn 6 semestre
        'cn6_seg_7','cn6_seg_9','cn6_ter_7','cn6_ter_9','cn6_ter_11','cn6_qua_7',
        'cn6_qua_9','cn6_qui_7','cn6_qui_9','cn6_sex_7','cn6_sex_9','cn6_sex_11',

        // gpi 1 semestre
        'gp1_seg_7','gp1_seg_9','gp1_ter_7','gp1_ter_9','gp1_qua_7','gp1_qua_9',
        'gp1_qui_7','gp1_qui_9','gp1_sex_7','gp1_sex_9',

        // gpi 2 semestre
        'gp2_seg_7','gp2_seg_9','gp2_ter_7','gp2_ter_9','gp2_qua_7','gp2_qua_9',
        'gp2_qui_7','gp2_qui_9','gp2_sex_7','gp2_sex_9',

        // gpi 3 semestre
        'gp3_seg_7','gp3_seg_9','gp3_ter_7','gp3_ter_9','gp3_qua_7','gp3_qua_9',
        'gp3_qui_7','gp3_qui_9','gp3_sex_7','gp3_sex_9',

        // gpi 4 semestre
        'gp4_seg_7','gp4_seg_9','gp4_ter_7','gp4_ter_9','gp4_qua_7','gp4_qua_9',
        'gp4_qui_7','gp4_qui_9','gp4_sex_7','gp4_sex_9',

        // gpi 5 semestre
        'gp5_seg_7','gp5_seg_9','gp5_ter_7','gp5_ter_9','gp5_qua_7','gp5_qua_9',
        'gp5_qui_7','gp5_qui_9','gp5_sex_7','gp5_sex_9',

        // gpi 6 semestre
        'gp6_seg_7','gp6_seg_9','gp6_ter_7','gp6_ter_9','gp6_qua_7','gp6_qua_9',
        'gp6_qui_7','gp6_qui_9','gp6_sex_7','gp6_sex_9',

        // ma 1 semestre
        'ma1_seg_7','ma1_seg_9','ma1_ter_7','ma1_ter_9','ma1_qua_7','ma1_qua_9',
        'ma1_qui_7','ma1_qui_9','ma1_sex_7','ma1_sex_9','ma1_sab_7','ma1_sab_9',

        // ma 2 semestre
        'ma2_seg_7','ma2_seg_9','ma2_ter_7','ma2_ter_9','ma2_qua_7','ma2_qua_9',
        'ma2_qui_7','ma2_qui_9','ma2_qui_11','ma2_sex_7','ma2_sex_9','ma2_sex_11',

        // ma 3 semestre
        'ma3_seg_7','ma3_seg_9','ma3_seg_11','ma3_ter_9','ma3_ter_11','ma3_qua_7',
        'ma3_qua_9','ma3_qua_11','ma3_qui_7','ma3_qui_9','ma3_sex_9','ma3_sex_11',

        // ma 4 semestre
        'ma4_seg_7','ma4_seg_9','ma4_seg_11','ma4_ter_7','ma4_ter_9','ma4_qua_7',
        'ma4_qua_9','ma4_qui_7','ma4_qui_9','ma4_qui_11','ma4_sex_9','ma4_sex_11',

        // ma 5 semestre
        'ma5_seg_7','ma5_seg_9','ma5_seg_11','ma5_ter_7','ma5_ter_9','ma5_qua_7',
        'ma5_qua_9','ma5_qui_9','ma5_qui_11','ma5_sex_7','ma5_sex_9','ma5_sex_11',

        // ma 6 semestre
        'ma6_seg_9','ma6_seg_11','ma6_ter_9','ma6_ter_11','ma6_qua_7','ma6_qua_9',
        'ma6_qua_11','ma6_qui_7','ma6_qui_9','ma6_qui_11',

        // si 3 semestre
        'si3_seg_9','si3_seg_11','si3_ter_9','si3_ter_11','si3_qua_7','si3_qua_9',
        'si3_qua_11','si3_qui_9','si3_qui_11',
        ));
    }
    public function grade()
    {
        $courses = Course::all();
        $disciplines = Discipline::all();
        $blocks = Blocks::all();
        $users = User::all();
        $rooms = Room::all();
        $semesters = Semester::all();

        return view('pages.making',
        compact('courses','disciplines','users','blocks','rooms','semesters'));

    }

    public function store(Request $request)
    {

        //dd($request->all());

        //$hour = $request->input('hours');

        //dd($hour);

        Hour::create(['user_id'=>$request->users,
                      'course_id'=>$request->courses,
                      'discipline_id'=>$request->disciplines,
                      'block_id'=>$request->blocks,
                      'room_id'=>$request->rooms,
                      'semester_id'=>$request->semesters,
                      'dia'=>$request->days,
                      'hora'=>$request->hours]);

        return response()->json(['success' => true]);
        //return redirect()->route('dash')->with('status','hour-created');
    }
}
