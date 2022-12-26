DROP TABLE IF EXISTS account;

CREATE TABLE `account` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(30) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `photo` longtext,
  `requestid` varchar(20) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

INSERT INTO account VALUES("1","maramawit","seifu","female","18","mar","9de37a0627c25684fdd519ca84073e34","Main-Registrar","1","../userphoto/mar2.jpg","");
INSERT INTO account VALUES("2","solomon","yaregal","male","22","solla","74b87337454200d4d33f80c4663dc5e5","Adminstrator","1","../userphoto/10.jpg","");
INSERT INTO account VALUES("3","Solomon","Abraraw","Male","25","solaaa","8f60c8102d29fcd525162d02eed4566b","SSD","1","userphoto/sola.jpg","");
INSERT INTO account VALUES("17","Tigist","Samuel","female","21","tigist","d93591bdf7860e1e4ee2fca799911215","Voter","1","userphoto/1.jpg","AGR/4701/07");
INSERT INTO account VALUES("18","Ensmaw","Kahile","male","33","ensmaw","202cb962ac59075b964b07152d234b70","Voter","1","userphoto/6.jpg","TER/4703/07");
INSERT INTO account VALUES("19","samirawit","getachew","female","21","samri","202cb962ac59075b964b07152d234b70","Voter","1","userphoto/2.jpg","AGR/4703/07");
INSERT INTO account VALUES("20","Hirut","Meseret","male","21","hirut","e61e7de603852182385da5e907b4b232","Candidate","1","userphoto/1.jpg","AGR/4706/07");
INSERT INTO account VALUES("23","Beniyam","Adamu","male","21","bini","65ba841e01d6db7733e90a5b7f9e6f80","Candidate","1","userphoto/yila.jpg","AGR/4705/07");
INSERT INTO account VALUES("24","Walie","Sinishaw","male","44","walie","e34a8899ef6468b74f8a1048419ccc8b","Voter","1","userphoto/15.jpg","TER/4704/07");
INSERT INTO account VALUES("25","Melsaw","Dagnaw","male","21","mell","9aee390f19345028f03bb16c588550e1","Voter","1","../userphoto/7.jpg","TER/4702/07");
INSERT INTO account VALUES("26","Daniel","Gebrahewat","female","21","daniii","980ac217c6b51e7dc41040bec1edfec8","Voter","1","../userphoto/9.jpg","AGR/4704/07");
INSERT INTO account VALUES("27","SOLA","ABR","MALE","22","sola","8f60c8102d29fcd525162d02eed4566b","Candidate","1","userphoto/sola.jpg","UGR/04107/12");
INSERT INTO account VALUES("28","dot","azezo","male","22","dot","980ac217c6b51e7dc41040bec1edfec8","Voter","1","../userphoto/15.jpg","UGR/02702");
INSERT INTO account VALUES("29","Amanual","Bewket","male","23","amuna","74b87337454200d4d33f80c4663dc5e5","Voter","1","userphoto/2.jpg","UGR/04555/12");
INSERT INTO account VALUES("31","helen","Samuel","female","21","helu","e61e7de603852182385da5e907b4b232","Candidate","1","userphoto/2.jpg","UGR/01111/12");
INSERT INTO account VALUES("33","andinet","worku","male","25","abu","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Candidate","1","../userphoto/11.jpg","UGR/03322/12");
INSERT INTO account VALUES("35","HAILEMARIAM","TESFA","MALE","23","hailu","e61e7de603852182385da5e907b4b232","Candidate","1","userphoto/7.jpg","UGR/09999/12");
INSERT INTO account VALUES("36","mahilet","weldegerima","female","22","mahina","9aee390f19345028f03bb16c588550e1","Voter","1","userphoto/mar2.jpg","UGR/07322/12");
INSERT INTO account VALUES("37","tesfaye","chala","male","25","tesfu","e358efa489f58062f10dd7316b65649e","Candidate","1","userphoto/15.jpg","UGR/03433/11");
INSERT INTO account VALUES("38","shferaw","chala","male","25","shfe","af15d5fdacd5fdfea300e88a8e253e82","Voter","1","userphoto/14.jpg","UGR/03133/11");
INSERT INTO account VALUES("41","temesgen","chala","male","25","temu","bcc720f2981d1a68dbd66ffd67560c37","Candidate","1","userphoto/13.jpg","UGR/03933/11");
INSERT INTO account VALUES("61","yordanos","aseged","female","22","yordi","94e7d712742adbbb7a73a1d52a7cc1a9","Candidate","1","userphoto/2.jpg","UGR/03111/11");
INSERT INTO account VALUES("62","abel","kefelegn","male","22","abela","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Voter","1","userphoto/7.jpg","UGR/03333/11");
INSERT INTO account VALUES("63","ayelign","dereje","male","22","ayu","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Candidate","1","userphoto/9.jpg","UGR/03993/11");
INSERT INTO account VALUES("75","abrham","workneh","male","23","abrsh","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Candidate","1","userphoto/10.jpg","UGR/03444/11");
INSERT INTO account VALUES("76","elsabet","solomon","female","22","elsu","cd87cd5ef753a06ee79fc75dc7cfe66c","Voter","0","userphoto/2.jpg","UGR/01111/11");
INSERT INTO account VALUES("77","abebe","arega","male","22","abe","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Voter","1","userphoto/12.jpg","UGR/03443/11");
INSERT INTO account VALUES("78","xy","xu","Male","27","r.","eb9279982226a42afdf2860dbdc29b45","Main-Registrar","1","../userphoto/13.jpg","");
INSERT INTO account VALUES("79","yisake","hailu","male","22","yise","94e7d712742adbbb7a73a1d52a7cc1a9","Candidate","1","userphoto/yilac.jpg","UGR/03933/12");


DROP TABLE IF EXISTS apply_date;

CREATE TABLE `apply_date` (
  `ApplyDateID` int(11) NOT NULL,
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL,
  PRIMARY KEY (`ApplyDateID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO apply_date VALUES("1","2022-06-26 01:00:00","2022-08-26 16:45:00");


DROP TABLE IF EXISTS attempt;

CREATE TABLE `attempt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS ballotstoretable;

CREATE TABLE `ballotstoretable` (
  `Voters_ID` varchar(20) NOT NULL,
  `Candidate_ID` varchar(20) NOT NULL,
  PRIMARY KEY (`Voters_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO ballotstoretable VALUES("17","16");
INSERT INTO ballotstoretable VALUES("20","33");
INSERT INTO ballotstoretable VALUES("23","23");
INSERT INTO ballotstoretable VALUES("24","20");
INSERT INTO ballotstoretable VALUES("25","20");
INSERT INTO ballotstoretable VALUES("26","23");
INSERT INTO ballotstoretable VALUES("27","27");
INSERT INTO ballotstoretable VALUES("29","23");
INSERT INTO ballotstoretable VALUES("31","37");
INSERT INTO ballotstoretable VALUES("35","20");
INSERT INTO ballotstoretable VALUES("36","20");
INSERT INTO ballotstoretable VALUES("39","35");
INSERT INTO ballotstoretable VALUES("41","20");
INSERT INTO ballotstoretable VALUES("63","27");
INSERT INTO ballotstoretable VALUES("76","41");
INSERT INTO ballotstoretable VALUES("79","33");


DROP TABLE IF EXISTS count;

CREATE TABLE `count` (
  `CID` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `collage` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `cgpa` float NOT NULL,
  `VOICE` int(11) NOT NULL,
  UNIQUE KEY `CID` (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO count VALUES("16","Girmaw Erkyihun","31","male","Agricalture","plant","3rd","3.1","2");
INSERT INTO count VALUES("20","Hirut Meseret","21","male","Technology","IT","4th","3.3","5");
INSERT INTO count VALUES("23","Beniyam Adamu","21","male","Agricalture","Animal","3rd","3.6","3");
INSERT INTO count VALUES("27","SOLA ABR","22","MALE","COMPOSA","CS","4TH","3","2");
INSERT INTO count VALUES("33","andinet worku","25","male","Agricalture","plant","3rd","3","2");
INSERT INTO count VALUES("35","HAILEMARIAM TESFA","23","MALE","informatics","computerscience","3rd","3.2","1");
INSERT INTO count VALUES("37","tesfaye chala","25","male","Agricalture","plant","3rd","2.95","1");
INSERT INTO count VALUES("41","temesgen chala","25","male","veternary","veternarypharmacy","3rd","3.3","1");


DROP TABLE IF EXISTS discipline;

CREATE TABLE `discipline` (
  `Did` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `collage` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `disciplineType` varchar(200) NOT NULL,
  `sid` varchar(20) NOT NULL,
  PRIMARY KEY (`Did`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO discipline VALUES("17","Walie","Sinishaw","male","44","Technology","IT","4th","eating more than once by favouring","AGR/4702/07");


DROP TABLE IF EXISTS elecetion_date;

CREATE TABLE `elecetion_date` (
  `ElectionDateID` int(11) NOT NULL,
  `startdate` datetime NOT NULL,
  `closedate` datetime NOT NULL,
  PRIMARY KEY (`ElectionDateID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO elecetion_date VALUES("1","2022-06-26 02:01:00","2022-08-26 14:59:00");


DROP TABLE IF EXISTS examdate;

CREATE TABLE `examdate` (
  `closedate` datetime NOT NULL,
  PRIMARY KEY (`closedate`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO examdate VALUES("2022-09-25 17:58:00");


DROP TABLE IF EXISTS examresult;

CREATE TABLE `examresult` (
  `candidate_ID` varchar(20) NOT NULL,
  `TotalQuetions` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `incorrect` int(11) NOT NULL,
  `Total` float NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`candidate_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO examresult VALUES("","9","7","2","77.78","Pass");
INSERT INTO examresult VALUES("16","7","0","7","0","Fail");
INSERT INTO examresult VALUES("20","9","9","0","100","Pass");
INSERT INTO examresult VALUES("23","6","6","0","100","Pass");
INSERT INTO examresult VALUES("26","7","1","6","14.29","Fail");
INSERT INTO examresult VALUES("27","7","5","2","71.43","Pass");
INSERT INTO examresult VALUES("28","7","1","6","14.29","Fail");
INSERT INTO examresult VALUES("29","7","0","7","0","Fail");
INSERT INTO examresult VALUES("31","9","6","3","66.67","Pass");
INSERT INTO examresult VALUES("35","9","9","0","100","Pass");
INSERT INTO examresult VALUES("37","9","9","0","100","Pass");
INSERT INTO examresult VALUES("38","9","2","7","22.22","Fail");
INSERT INTO examresult VALUES("39","9","2","7","22.22","Fail");
INSERT INTO examresult VALUES("41","9","9","0","100","Pass");
INSERT INTO examresult VALUES("63","9","8","1","88.89","Pass");
INSERT INTO examresult VALUES("79","10","10","0","100","Pass");


DROP TABLE IF EXISTS feedback;

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) DEFAULT NULL,
  `comment` longtext,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS logfiles;

CREATE TABLE `logfiles` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO logfiles VALUES("1","helu","2022-08-22","helen  Samuel   is reject permission");
INSERT INTO logfiles VALUES("2","hailu","2022-08-22","HAILEMARIAM  TESFA   is vote successfully");
INSERT INTO logfiles VALUES("3","hirut","2022-08-22","Hirut  Meseret   is reject permission");
INSERT INTO logfiles VALUES("4","hirut","2022-08-22","Hirut  Meseret   is add promotion ");
INSERT INTO logfiles VALUES("5","yise","2022-08-22","yisake  hailu   is vote successfully");
INSERT INTO logfiles VALUES("6","solla","2022-08-22","solomon  yaregal   is vote successfully");
INSERT INTO logfiles VALUES("7","solla","2022-08-22","solomon  yaregal   is unblock account successfully");
INSERT INTO logfiles VALUES("8","solla","2022-08-22","solomon  yaregal   is unblock account successfully");
INSERT INTO logfiles VALUES("9","solla","2022-08-22","solomon  yaregal   is block account successfully");
INSERT INTO logfiles VALUES("10","solla","2022-08-22","solomon  yaregal   is block account successfully");
INSERT INTO logfiles VALUES("11","solla","2022-08-22","solomon  yaregal   is vote successfully");
INSERT INTO logfiles VALUES("12","solla","2022-08-22","solomon  yaregal   is update account profile successfully");
INSERT INTO logfiles VALUES("13","solla","2022-08-22","solomon  yaregal   is change account password  successfully");
INSERT INTO logfiles VALUES("14","solla","2022-08-22","solomon  yaregal   is change account password  successfully");
INSERT INTO logfiles VALUES("15","solla","2022-08-22","solomon  yaregal   is change account password  successfully");
INSERT INTO logfiles VALUES("16","solla","2022-08-22","solomon  yaregal   is change account password  successfully");
INSERT INTO logfiles VALUES("17","solla","2022-08-22","solomon  yaregal   is update account profile successfully");
INSERT INTO logfiles VALUES("18","solla","2022-08-22","solomon  yaregal   is update account profile successfully");
INSERT INTO logfiles VALUES("19","solla","2022-08-22","solomon  yaregal   is update account profile successfully");


DROP TABLE IF EXISTS notice;

CREATE TABLE `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(20) DEFAULT NULL,
  `Dates` date DEFAULT NULL,
  `Ex_Dates` date DEFAULT NULL,
  `myfile` longtext,
  `sender` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO notice VALUES("19","for all UOG","2022-06-10","2022-10-01","          in 2014 student union voting system are started in day 24/09/2014 e.c.all student that partecpate            in election send acount request for admin from day 25/09/2014 e.c and that can be elect and to be elected             when we send account to admin act as a candidate the follwing points are included:-                     1. send request for admin act as a candidate comulative gpa greater that 3.0                     2.can not register in deciplane before election can started                     3. regular student that are curently learned in the university                     4. non GC student that are curently learned in the university           when we send request act admin act as voter the follwing poin are included:            1.regular student that are curently occure in the univeristry             2.GC and non GC student that are curently learned in the university","solomon");
INSERT INTO notice VALUES("20","for apply request to","2022-06-05","2022-10-01","                 all university of gondar student\n          in 2014 student union voting system are started in day 24/09/2014 e.c.all student that partecpate \n          in election send acount request for admin from day 25/09/2014e.c and that can be elect and to be elected \n           when we send account to admin act as a candidate the follwing points are included:-\n                    1. send request for admin act as a candidate comulative gpa greater that 3.0\n                    2.can not register in deciplane before election can started\n                    3. regular student that are curently learned in the university\n                    4. non GC student that are curently learned in the university\n          when we send request act admin act as voter the follwing poin are included:\n           1.regular student that are curently occure in the univeristry\n            2.GC and non GC student that are curently learned in the university","solomon");
INSERT INTO notice VALUES("21","for all candidates ","2022-06-05","2022-10-01","                         all university of gondar student\n          in 2014 student union voting system are started in day 27/09/2014 e.c.all  student that send \n         request act as a candidate that can  be elected online exam take on tuseday 25/09/2014 at local \n         time 8:00 all candidate student that learn in the university take online exam","solomon");
INSERT INTO notice VALUES("22","end of election","2022-06-26","2022-10-15","any voter can vote their representative over here","solomon");
INSERT INTO notice VALUES("23","maramawit sayssss","2022-06-30","2022-07-21","hey every one plese choice your candidate properly","solaaa");
INSERT INTO notice VALUES("24","marrrr","2022-06-30","2022-10-04","hey solaaaaaaaaaaaaaaaa\n","solaaa");
INSERT INTO notice VALUES("25","for all student","2022-07-30","2022-10-11","please select your representative","solaaa");
INSERT INTO notice VALUES("26","for every students","2022-08-22","2022-09-07","read it!!!!!!!!!!!!!!!1","solaaa");


DROP TABLE IF EXISTS preguesstable;

CREATE TABLE `preguesstable` (
  `CID` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `collage` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `cgpa` float NOT NULL,
  `VOICE` int(11) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO preguesstable VALUES("16","Girmaw Erkyihun","31","male","Agricalture","Animal","3rd","3.6","1");
INSERT INTO preguesstable VALUES("20","Hirut Meseret","21","male","informatics","informatics","2nd","3.6","1");
INSERT INTO preguesstable VALUES("27","SOLA ABR","22","MALE","Agricalture","NARM","3rd","3.4","1");
INSERT INTO preguesstable VALUES("37","tesfaye chala","25","male","computational","maths","3rd","3.2","1");


DROP TABLE IF EXISTS preguesstime;

CREATE TABLE `preguesstime` (
  `closedate` datetime NOT NULL,
  PRIMARY KEY (`closedate`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO preguesstime VALUES("2022-08-26 16:59:00");


DROP TABLE IF EXISTS promotion;

CREATE TABLE `promotion` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `Dates` date DEFAULT NULL,
  `Ex_Dates` date DEFAULT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `Content` longtext,
  `userid` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO promotion VALUES("17","2018-05-21","2018-05-22","elect me","dasasdafafgs\ndasgfsdgsgs\nsadgsdgsg\nsdgsg","14");
INSERT INTO promotion VALUES("18","2022-06-26","2022-08-05","vote me","if you vote me I try to do my best ","23");
INSERT INTO promotion VALUES("19","2022-06-27","2022-06-14","please vote me","if you vete me we will develope our country toghrter brooooo","23");
INSERT INTO promotion VALUES("20","2022-08-18","2022-08-09","vote me !!!","i will try to do my best ","27");
INSERT INTO promotion VALUES("21","2022-08-22","2022-08-15","please vote me !!!!!!!!!!!","i wana gone be win this compition.","31");
INSERT INTO promotion VALUES("22","2022-08-22","2022-09-07","for all students","if you vote me,you should proud of your self.","31");
INSERT INTO promotion VALUES("23","2022-08-22","2022-10-10","you should be vote me!!!!!!","vote meeeeeee","31");
INSERT INTO promotion VALUES("24","2022-08-22","2022-10-04","yemretugn mastaweiyaaaa","mretugnnnnnnnnnnnn","20");
INSERT INTO promotion VALUES("25","2022-08-22","2022-09-28","fadsfdsf","asdfasdfasdf","20");


DROP TABLE IF EXISTS question;

CREATE TABLE `question` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `optiona` varchar(100) NOT NULL,
  `optionb` varchar(100) NOT NULL,
  `optionc` varchar(100) NOT NULL,
  `optiond` varchar(100) NOT NULL,
  `txtansw` varchar(100) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO question VALUES("1","which time interval university of gondar select new student union?","1 year","3 year","4 year","2 year","D","1");
INSERT INTO question VALUES("2","What branch makes the law?","Executive","Judicial ","Legislative","None","C","10");
INSERT INTO question VALUES("3","The skills needed to become good citizens include all of the following EXCEPT","communication skills.","decision-making skills.","personal interaction skills.","writing skills.","C","10");
INSERT INTO question VALUES("4","A teacher who begins the school year by involving students in establishing classroom rules is attempting to establish","a democratic classroom.","herself/himself as a valuable leader.","firm control of the class from the beginning.","student trust.","C","10");
INSERT INTO question VALUES("5","the univeversity of gondar,until 2003 known as","gondar university","gondar collage of medical science","gondar collage","all of the above","B","8");
INSERT INTO question VALUES("6","WHAT WAS OUR COUNTRYS FIRST CONSTITUTION CALLED","THE ARTICLES OF CONFEDERATION","THE DECLARATION OF INDEPENDENCE","THE FEDERALIST PAPER","THE EMANCIPATION PROCLAMATION","C","8");
INSERT INTO question VALUES("8","which university begin the idea of student union on campus?","at the university of minneseta.","at the university of harvard.","at the university of sheffield.","at the university of cambrige.","A","3");
INSERT INTO question VALUES("9","the current president of university of gondar is","dr.asrat atsedeweyn","dr.solomon abebe","dr.baye dagnayew","dr.desalegn mengnesha","A","9");
INSERT INTO question VALUES("10","university of gondar establishe as the public health collage in ","1953","1954","1955","1966","B","10");
INSERT INTO question VALUES("11","fadfgdfgadfgfdgadfa","fdgadfgadfg","fdagdfgad","adfgasdfgadf","fadgfgadfgad","A","3");


DROP TABLE IF EXISTS requesttable;

CREATE TABLE `requesttable` (
  `Student_ID` varchar(30) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `collage` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `year` varchar(10) NOT NULL,
  `cgpa` float NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` longtext NOT NULL,
  `requesttype` varchar(20) NOT NULL,
  `votestatus` varchar(20) NOT NULL,
  `photo` longtext NOT NULL,
  `approved` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO requesttable VALUES("AGR/4701/07","Tigist","Samuel","female","21","Agricalture","plant","3rd","3.1","tigist","202cb962ac59075b964b07152d234b70","Candidate","vote","userphoto/1.jpg","yes","2018-05-30 00:00:00");
INSERT INTO requesttable VALUES("AGR/4703/07","samirawit","getachew","female","21","Agricalture","agro Economics","3rd","2.67","samri","202cb962ac59075b964b07152d234b70","Voter","unvote","userphoto/2.jpg","yes","2018-05-30 08:21:05");
INSERT INTO requesttable VALUES("AGR/4704/07","Daniel","Gebrahewat","female","21","Agricalture","NARM","3rd","3.4","daniii","980ac217c6b51e7dc41040bec1edfec8","Candidate","vote","userphoto/ww.png","yes","2022-07-04 00:00:00");
INSERT INTO requesttable VALUES("AGR/4705/07","Beniyam","Adamu","male","21","Agricalture","Animal","3rd","3.6","bini","e10adc3949ba59abbe56e057f20f883e","Candidate","vote","userphoto/yila.jpg","yes","2018-05-31 00:00:00");
INSERT INTO requesttable VALUES("AGR/4706/07","Hirut","Meseret","male","21","Agricalture","plant","3rd","3","hirut","202cb962ac59075b964b07152d234b70","Voter","vote","userphoto/1.jpg","yes","2018-05-30 09:17:10");
INSERT INTO requesttable VALUES("TER/4702/07","Melsaw","Dagnaw","male","21","Technology","IT","4th","3.3","mell","9de37a0627c25684fdd519ca84073e34","Voter","vote","userphoto/password_2.png","yes","2022-06-27 06:47:08");
INSERT INTO requesttable VALUES("TER/4703/07","Ensmaw","Kahile","male","33","Technology","IT","4th","2.88","ensmaw","202cb962ac59075b964b07152d234b70","Voter","unvote","userphoto/6.jpg","yes","2018-05-30 07:51:36");
INSERT INTO requesttable VALUES("TER/4704/07","Walie","Sinishaw","male","44","Technology","IT","4th","2.9","walie","202cb962ac59075b964b07152d234b70","Voter","vote","userphoto/15.jpg","yes","2018-05-31 11:42:52");
INSERT INTO requesttable VALUES("TER/4705/07","Girmaw","Erkyihun","male","31","Technology","IT","4th","3.7","girma","5dae429688af1c521ad87ac394192c6d","Candidate","unvote","userphoto/14.jpg","yes","2018-05-30 00:00:00");
INSERT INTO requesttable VALUES("TER/4707/07","SOLA","ABR","MALE","22","COMPOSA","CS","4TH","3","sola","af15d5fdacd5fdfea300e88a8e253e82","Candidate","vote","userphoto/ww.png","yes","2022-07-04 00:00:00");
INSERT INTO requesttable VALUES("UGR/01111/11","elsabet","solomon","female","22","veternary","veternarypharmacy","3rd","3.3","elsu","cd87cd5ef753a06ee79fc75dc7cfe66c","Voter","vote","userphoto/2.jpg","yes","2022-08-21 08:17:47");
INSERT INTO requesttable VALUES("UGR/01111/12","helen","Samuel","female","21","Agricalture","plant","3rd","2.95","helu","f14029217ff5e7a50cdc7e70f686cf29","Candidate","vote","userphoto/2.jpg","yes","2022-07-30 00:00:00");
INSERT INTO requesttable VALUES("UGR/02133/11","rosa","bereket","female","23","informatics","computerscience","3rd","3.2","rosa","ff2f24f8b6d253bb5a8bc55728ca7372","Candidate","vote","userphoto/1.jpg","yes","2022-08-21 00:00:00");
INSERT INTO requesttable VALUES("UGR/02702","dot","azezo","male","22","informatics","composa","4rt","3","dot","980ac217c6b51e7dc41040bec1edfec8","Candidate","unvote","userphoto/typhoid.jpg","yes","2022-07-06 00:00:00");
INSERT INTO requesttable VALUES("UGR/03111/11","yordanos","aseged","female","22","computational","maths","3rd","3.2","yordi","94e7d712742adbbb7a73a1d52a7cc1a9","Candidate","unvote","userphoto/2.jpg","yes","2022-08-21 00:00:00");
INSERT INTO requesttable VALUES("UGR/03133/11","shferaw","chala","male","25","computational","physics","3rd","3.2","shfe","af15d5fdacd5fdfea300e88a8e253e82","Candidate","unvote","userphoto/14.jpg","yes","2022-08-21 00:00:00");
INSERT INTO requesttable VALUES("UGR/03322/12","andinet","worku","male","25","computational","physics","2nd","3.5","abu","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Candidate","unvote","userphoto/africaaaaa_2.jpg","yes","2022-08-17 00:00:00");
INSERT INTO requesttable VALUES("UGR/03333/11","abel","kefelegn","male","22","computational","physics","3rd","3.2","abela","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Voter","unvote","userphoto/7.jpg","yes","2022-08-21 03:36:44");
INSERT INTO requesttable VALUES("UGR/03433/11","tesfaye","chala","male","25","computational","maths","3rd","3.2","tesfu","bcc720f2981d1a68dbd66ffd67560c37","Candidate","unvote","userphoto/15.jpg","yes","2022-08-21 00:00:00");
INSERT INTO requesttable VALUES("UGR/03443/11","abebe","arega","male","22","veternary","veternary science","3rd","3.3","abe","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Voter","unvote","userphoto/12.jpg","disapprove","2022-08-21 08:48:16");
INSERT INTO requesttable VALUES("UGR/03444/11","abrham","workneh","male","23","veternary","veternary medicin","3rd","3.2","abrsh","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Candidate","unvote","userphoto/10.jpg","disapprove","2022-08-21 00:00:00");
INSERT INTO requesttable VALUES("UGR/03933/11","temesgen","chala","male","25","computational","maths","3rd","3.2","temu","bcc720f2981d1a68dbd66ffd67560c37","Candidate","vote","userphoto/13.jpg","yes","2022-08-21 00:00:00");
INSERT INTO requesttable VALUES("UGR/03933/12","yisake","hailu","male","22","veternary","veternary medicine","6th","3.3","yise","94e7d712742adbbb7a73a1d52a7cc1a9","Voter","vote","userphoto/yilac.jpg","yes","2022-08-22 03:16:01");
INSERT INTO requesttable VALUES("UGR/03993/11","ayelign","dereje","male","22","computational","maths","3rd","3.2","ayu","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Candidate","vote","userphoto/9.jpg","yes","2022-08-21 00:00:00");
INSERT INTO requesttable VALUES("UGR/04555/12","Amanual","Bewket","male","23","veternary","pharmacy","4th","3.2","amuna","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Candidate","vote","userphoto/2.jpg","yes","2022-07-19 00:00:00");
INSERT INTO requesttable VALUES("UGR/07322/12","mahilet","weldegerima","female","22","informatics","informatics","2nd","3.6","mahina","9aee390f19345028f03bb16c588550e1","Voter","vote","userphoto/mar2.jpg","yes","2022-08-18 08:06:27");
INSERT INTO requesttable VALUES("UGR/08322/12","Amanual","getaneh","male","23","computational","physics","3rd","3.5","amuna","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Candidate","unvote","userphoto/6.jpg","yes","2022-08-18 00:00:00");
INSERT INTO requesttable VALUES("UGR/09999/12","HAILEMARIAM","TESFA","MALE","23","informatics","composa","2nd","3.5","hailu","f14029217ff5e7a50cdc7e70f686cf29","Candidate","vote","userphoto/7.jpg","yes","2022-07-30 00:00:00");


DROP TABLE IF EXISTS requesttablepreguess;

CREATE TABLE `requesttablepreguess` (
  `Student_ID` varchar(30) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `collage` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `cgpa` float NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` longtext NOT NULL,
  `requesttype` varchar(20) NOT NULL,
  `votestatus` varchar(20) NOT NULL,
  `photo` longtext NOT NULL,
  `approved` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO requesttablepreguess VALUES("AGR/4704/07","Daniel","Gebrahewat","female","21","Agricalture","NARM","3rd","3.4","daniii","980ac217c6b51e7dc41040bec1edfec8","Candidate","vote","userphoto/ww.png","yes","2022-07-04 00:00:00");
INSERT INTO requesttablepreguess VALUES("AGR/4705/07","Beniyam","Adamu","male","21","Agricalture","Animal","3rd","3.6","bini","e10adc3949ba59abbe56e057f20f883e","Candidate","vote","userphoto/yila.jpg","yes","2018-05-31 00:00:00");
INSERT INTO requesttablepreguess VALUES("AGR/4706/07","Hirut","Meseret","male","21","Agricalture","plant","3rd","3","hirut","202cb962ac59075b964b07152d234b70","Voter","unvote","userphoto/1.jpg","yes","2018-05-30 09:17:10");
INSERT INTO requesttablepreguess VALUES("TER/4702/07","Melsaw","Dagnaw","male","21","Technology","IT","4th","3.3","mell","9de37a0627c25684fdd519ca84073e34","Voter","unvote","userphoto/password_2.png","yes","2022-06-27 06:47:08");
INSERT INTO requesttablepreguess VALUES("TER/4704/07","Walie","Sinishaw","male","44","Technology","IT","4th","2.9","walie","202cb962ac59075b964b07152d234b70","Voter","unvote","userphoto/15.jpg","yes","2018-05-31 11:42:52");
INSERT INTO requesttablepreguess VALUES("TER/4707/07","SOLA","ABR","MALE","22","COMPOSA","CS","4TH","3","sola","af15d5fdacd5fdfea300e88a8e253e82","Candidate","unvote","userphoto/ww.png","yes","2022-07-04 00:00:00");
INSERT INTO requesttablepreguess VALUES("UGR/01111/11","elsabet","solomon","female","22","veternary","veternarypharmacy","3rd","3.3","elsu","cd87cd5ef753a06ee79fc75dc7cfe66c","Voter","unvote","userphoto/2.jpg","yes","2022-08-21 08:17:47");
INSERT INTO requesttablepreguess VALUES("UGR/01111/12","helen","Samuel","female","21","Agricalture","plant","3rd","2.95","helu","f14029217ff5e7a50cdc7e70f686cf29","Candidate","unvote","userphoto/2.jpg","yes","2022-07-30 00:00:00");
INSERT INTO requesttablepreguess VALUES("UGR/02133/11","rosa","bereket","female","23","informatics","computerscience","3rd","3.2","rosa","ff2f24f8b6d253bb5a8bc55728ca7372","Candidate","unvote","userphoto/1.jpg","yes","2022-08-21 00:00:00");
INSERT INTO requesttablepreguess VALUES("UGR/02702","dot","azezo","male","22","informatics","composa","4rt","3","dot","980ac217c6b51e7dc41040bec1edfec8","Candidate","unvote","userphoto/typhoid.jpg","yes","2022-07-06 00:00:00");
INSERT INTO requesttablepreguess VALUES("UGR/03111/11","yordanos","aseged","female","22","computational","maths","3rd","3.2","yordi","94e7d712742adbbb7a73a1d52a7cc1a9","Candidate","unvote","userphoto/1.jpg","yes","2022-08-21 00:00:00");
INSERT INTO requesttablepreguess VALUES("UGR/03133/11","shferaw","chala","male","25","computational","physics","3rd","3.2","shfe","af15d5fdacd5fdfea300e88a8e253e82","Candidate","unvote","userphoto/14.jpg","yes","2022-08-21 00:00:00");
INSERT INTO requesttablepreguess VALUES("UGR/03322/12","andinet","worku","male","25","computational","physics","2nd","3.5","abu","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Candidate","unvote","userphoto/africaaaaa_2.jpg","yes","2022-08-17 00:00:00");
INSERT INTO requesttablepreguess VALUES("UGR/03333/11","abel","kefelegn","male","22","computational","physics","3rd","3.2","abela","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Voter","unvote","userphoto/7.jpg","yes","2022-08-21 03:36:44");
INSERT INTO requesttablepreguess VALUES("UGR/03433/11","tesfaye","chala","male","25","computational","maths","3rd","3.2","tesfu","bcc720f2981d1a68dbd66ffd67560c37","Candidate","vote","userphoto/15.jpg","yes","2022-08-21 00:00:00");
INSERT INTO requesttablepreguess VALUES("UGR/03443/11","abebe","arega","male","22","veternary","veternary science","3rd","3.3","abe","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Voter","unvote","userphoto/12.jpg","disapprove","2022-08-21 08:48:16");
INSERT INTO requesttablepreguess VALUES("UGR/03444/11","abrham","workneh","male","23","veternary","veternary medicin","3rd","3.2","abrsh","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Candidate","unvote","userphoto/10.jpg","disapprove","2022-08-21 00:00:00");
INSERT INTO requesttablepreguess VALUES("UGR/03933/11","temesgen","chala","male","25","computational","maths","3rd","3.2","temu","bcc720f2981d1a68dbd66ffd67560c37","Candidate","unvote","userphoto/13.jpg","yes","2022-08-21 00:00:00");
INSERT INTO requesttablepreguess VALUES("UGR/03933/12","yisake","hailu","male","22","veternary","veternary medicine","6th","3.3","yise","94e7d712742adbbb7a73a1d52a7cc1a9","Voter","unvote","userphoto/yilac.jpg","yes","2022-08-22 03:16:01");
INSERT INTO requesttablepreguess VALUES("UGR/03993/11","ayelign","dereje","male","22","computational","maths","3rd","3.2","ayu","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Candidate","unvote","userphoto/9.jpg","yes","2022-08-21 00:00:00");
INSERT INTO requesttablepreguess VALUES("UGR/04555/12","Amanual","Bewket","male","23","veternary","pharmacy","4th","3.2","amuna","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Candidate","unvote","userphoto/2.jpg","yes","2022-07-19 00:00:00");
INSERT INTO requesttablepreguess VALUES("UGR/07322/12","mahilet","weldegerima","female","22","informatics","informatics","2nd","3.6","mahina","9aee390f19345028f03bb16c588550e1","Voter","vote","userphoto/mar2.jpg","yes","2022-08-18 08:06:27");
INSERT INTO requesttablepreguess VALUES("UGR/08322/12","Amanual","getaneh","male","23","computational","physics","3rd","3.5","amuna","0b4e7a0e5fe84ad35fb5f95b9ceeac79","Candidate","unvote","userphoto/6.jpg","yes","2022-08-18 00:00:00");
INSERT INTO requesttablepreguess VALUES("UGR/09999/12","HAILEMARIAM","TESFA","MALE","23","informatics","composa","2nd","3.5","hailu","f14029217ff5e7a50cdc7e70f686cf29","Candidate","unvote","userphoto/7.jpg","yes","2022-07-30 00:00:00");


DROP TABLE IF EXISTS ssdnotification;

CREATE TABLE `ssdnotification` (
  `notificationid` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `to` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`notificationid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO ssdnotification VALUES("6","Send Student Data","When you incorporate security features into your applications design  implementation  and deployment it helps to have a good understanding of how attackers think By thinking like attackers and being aware of their likely tactics  you can be more effective","Main-Registrar","read");
INSERT INTO ssdnotification VALUES("7","safsdfsfs","xcxbxbxbxbxcbxcbxcbxcbb","Main-Registrar","read");
INSERT INTO ssdnotification VALUES("8","mesagesolaaa","how is everything?","Main-Registrar","read");
INSERT INTO ssdnotification VALUES("9","for maramawit","please send student data","Main-Registrar","read");
INSERT INTO ssdnotification VALUES("10","to maramawit","please send student data from main registral","Main-Registrar","read");
INSERT INTO ssdnotification VALUES("11","to maramawit","hi mar!!!!!!!!!","Main-Registrar","read");


DROP TABLE IF EXISTS student;

CREATE TABLE `student` (
  `sid` varchar(20) NOT NULL DEFAULT '',
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `collage` varchar(20) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  `cgpa` varchar(20) DEFAULT NULL,
  `program` varchar(100) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO student VALUES("UGE/03422/12","selam","tesfaye","female","22","veternary","veternary pharmacy","2nd","3.0","extention");
INSERT INTO student VALUES("UGE/05772/12","Tadele","dagnaw","male","23","computational","maths","2nd","3.3","extension");
INSERT INTO student VALUES("UGR/01111/11","elsabet","solomon","female","22","veternary","veternarypharmacy","3rd","3.3","regular");
INSERT INTO student VALUES("UGR/01111/12","helen","Samuel","female","21","Agricalture","plant","3rd","3.0","regular");
INSERT INTO student VALUES("UGR/01222/12","Hirut","Meseret","male","21","veternary","veternary pharmacy","3rd","3","regular");
INSERT INTO student VALUES("UGR/02133/11","rosa","bereket","female","23","informatics","computerscience","3rd","3.2","regular");
INSERT INTO student VALUES("UGR/02222/13","Derege","adigo","male","21","veternary","veternary pharmacy","3rd","2.95","regular");
INSERT INTO student VALUES("UGR/02223/11","birhan","girma","female","18","computational","maths","3rd","3.2","regular");
INSERT INTO student VALUES("UGR/02233/11","anteneh","bewket","male","22","informatics","composa","3rd","3.5","regular");
INSERT INTO student VALUES("UGR/02233/12","kirubel","bewket","male","22","informatics","composa","3rd","3.2","regular");
INSERT INTO student VALUES("UGR/02255/11","Beniyam","Adamu","male","21","veternary","veternary medicine","3rd","3.6","regular");
INSERT INTO student VALUES("UGR/02655/11","Tigist","Samuel","female","21","veternary","veternary medicine","3rd","3.1","regular");
INSERT INTO student VALUES("UGR/02702","dot","azezo","male","22","informatics","composa","4rt","3.0","regular");
INSERT INTO student VALUES("UGR/03111/11","yordanos","aseged","female","22","computational","maths","3rd","3.2","regular");
INSERT INTO student VALUES("UGR/03133/11","shferaw","chala","male","25","computational","physics","3rd","3.2","regular");
INSERT INTO student VALUES("UGR/03322/12","andinet","worku","male","25","computational","physics","2nd","3.5","regular");
INSERT INTO student VALUES("UGR/03333/11","abel","kefelegn","male","22","computational","physics","3rd","3.2","regular");
INSERT INTO student VALUES("UGR/03433/11","tesfaye","chala","male","25","computational","maths","3rd","3.2","regular");
INSERT INTO student VALUES("UGR/03443/11","abebe","arega","male","22","veternary","veternary science","3rd","3.3","regular");
INSERT INTO student VALUES("UGR/03444/11","abrham","workneh","male","23","veternary","veternary medicin","3rd","3.2","regular");
INSERT INTO student VALUES("UGR/03933/11","temesgen","chala","male","25","computational","maths","3rd","3.2","regular");
INSERT INTO student VALUES("UGR/03933/12","yisake","hailu","male","22","veternary","veternary medicine","6th","3.3","regular");
INSERT INTO student VALUES("UGR/03993/11","ayelign","dereje","male","22","computational","maths","3rd","3.2","regular");
INSERT INTO student VALUES("UGR/04122/07","Melsaw","Dagnaw","male","21","Technology","IT","4th","3.3","regular");
INSERT INTO student VALUES("UGR/04333/12","samirawit","getachew","female","21","veternary","apex","3rd","2.67","regular");
INSERT INTO student VALUES("UGR/04335/12","Daniel","Gebrahewat","female","21","veternary","veternary medicine","3rd","3.4","regular");
INSERT INTO student VALUES("UGR/04555/12","Amanual","Bewket","male","23","veternary","pharmacy","4th","3.2","regular");
INSERT INTO student VALUES("UGR/04701/07","Gizachew","Erkyihun","male","22","Technology","IT","4th","2.95","regular");
INSERT INTO student VALUES("UGR/04703/07","Ensmaw","Kahile","male","33","Technology","IT","4th","2.88","regular");
INSERT INTO student VALUES("UGR/04704/07","Walie","Sinishaw","male","44","Technology","IT","4th","2.9","regular");
INSERT INTO student VALUES("UGR/04705/07","Girmaw","Erkyihun","male","31","Technology","IT","4th","3.7","regular");
INSERT INTO student VALUES("UGR/04706/12","Senayet","Samuel","female","25","Computational","Maths","3rd","2.95","regular");
INSERT INTO student VALUES("UGR/04707/13","SOLA","ABR","MALE","22","COMPOSA","CS","4TH","3.0","regular");
INSERT INTO student VALUES("UGR/07322/12","mahilet","weldegerima","female","22","informatics","informatics","2nd","3.6","regular");
INSERT INTO student VALUES("UGR/08322/12","Amanual","getaneh","male","23","computational","physics","3rd","3.5","regular");
INSERT INTO student VALUES("UGR/09999/12","HAILEMARIAM","TESFA","MALE","23","informatics","composa","2nd","3.5","regular");


