# Host: localhost  (Version: 5.1.58-community)
# Date: 2013-11-04 23:10:34
# Generator: MySQL-Front 5.3  (Build 4.9)

/*!40101 SET NAMES utf8 */;

#
# Source for table "comments"
#

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `username` varchar(32) DEFAULT NULL,
  `m_content` varchar(255) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "comments"
#

/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,'王老五','不错不错！',1383577411),(2,2,'宝宝','支持习总书记',1383577511);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

#
# Source for table "flinks"
#

DROP TABLE IF EXISTS `flinks`;
CREATE TABLE `flinks` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(32) DEFAULT NULL,
  `f_src` varchar(255) DEFAULT NULL,
  `f_status` tinyint(3) DEFAULT NULL,
  `f_addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "flinks"
#

/*!40000 ALTER TABLE `flinks` DISABLE KEYS */;
INSERT INTO `flinks` VALUES (1,'搜狐网','http://sohu.com',1,NULL);
/*!40000 ALTER TABLE `flinks` ENABLE KEYS */;

#
# Source for table "post_type"
#

DROP TABLE IF EXISTS `post_type`;
CREATE TABLE `post_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(32) DEFAULT NULL,
  `pid` tinyint(3) DEFAULT NULL,
  `myorder` int(11) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='分类表';

#
# Data for table "post_type"
#

/*!40000 ALTER TABLE `post_type` DISABLE KEYS */;
INSERT INTO `post_type` VALUES (1,'生活',0,2),(2,'历程',0,4),(3,'大学',0,3),(4,'php',0,3),(5,'jquery',0,1);
/*!40000 ALTER TABLE `post_type` ENABLE KEYS */;

#
# Source for table "posts"
#

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sn_title` varchar(255) DEFAULT NULL,
  `content` text,
  `view` int(11) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `last_change_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='文章表';

#
# Data for table "posts"
#

/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'1','习总鼓励企业加强科技创新','　新华网北京11月4日电 据新华社“新华视点”微博报道，习近平4日来到威胜集团。智能电能表、电动汽车交流充电桩、有源电力滤波器……企业的自主创新给总书记留下深刻印象。企业负责人告诉总书记，每年将6%的销售收入投入研发，产品不仅替代进口而且出口国外。习近平希望企业继续加强研发，不断创新。','新华网北京11月4日电 据新华社“新华视点”微博报道，习近平4日来到威胜集团。智能电能表、电动汽车交流充电桩、有源电力滤波器……企业的自主创新给总书记留下深刻印象。企业负责人告诉总书记，每年将6%的销售收入投入研发，产品不仅替代进口而且出口国外。习近平希望企业继续加强研发，不断创新。\n\n　　威胜集团有限公司是一家主要从事智能电表等能源计量产品研发、生产、销售的企业，电力计量高端产品国内市场占有率排名第一。企业自主创新能力居行业领先水平，每年新产品销售收入占总销售收入50%以上。今年上半年实现销售收入11.45亿元，增长4%。',19,NULL,NULL),(2,'2','人大教授：住房问题决定当今中国的人心向背','中国革命、建设和改革发展的基本问题，决定中国的命运和基本走向。准确把握、科学认识和正确解决中国革命、建设和改革发展的基本问题，是全党上下必须高度关注的关键所在。','中国革命、建设和改革发展的基本问题，决定中国的命运和基本走向。准确把握、科学认识和正确解决中国革命、建设和改革发展的基本问题，是全党上下必须高度关注的关键所在。\n　　在20世纪中国的民主革命时期，由于农民占全国总人口的90%以上，又是中国无产阶级的可靠同盟军和中国革命的主力军，农民问题就成为中国革命的基本问题。农民的命根子是土地，封建土地制度是封建主义的基础。中国农民问题实质上是土地问题，废除封建土地制度、解决农民土地问题是中国革命的基本问题。中国共产党提出“耕者有其田”纲领口号和基本政策，领导亿万农民“打土豪、分田地”，从根本上得到了中国亿万农民的支持、拥护和爱戴，夺取了民主革命的伟大胜利。\n　　在21世纪中国的城镇化进程中，除了农村农民的土地问题以外，城镇化进程中的住房问题开始上升为21世纪中国改革发展的基本问题。\n　　第一，中华民族奠基于农业文明，注重安居乐业的传统价值取向非常关心住房问题。“恒产者恒心”，“住者有其屋”历来是中国人牵情动心的基本需求之一和中华梦的主要内容。“金窝银窝不如自己的狗窝”，这句话集中体现了中国人对于“居者有其屋”的深刻关怀。\n　　第二，城镇居民尤其是正处在城镇化进程中的中国农民，面临着就业、上学、卫生医疗、社会保障等一系列重大民生问题，但是最根本的是住房问题。在所有民生问题中，就业是前提，住房是基础。住房是广大工薪阶层和亿万农民工在城市安身立命、安居乐业的根本和基础。\n　　有了住房，其他一切都好说;没有住房，解决其他问题都是空话，也没有多少实际意义。尤其在房地产价格多年来居高不下的情况下，很多人花尽几代人的积蓄甚至穷其一生都无法买到一套哪怕足够容身的住房，更使住房成为城市工薪阶层、进城农民工及其80后、90后依靠个人的力量几乎都已经无法解决的焦点问题。\n　　第三，据有关方面研究统计，当前我国已经转化为城市非农业户口的进城农民工只有27.3%，远远少于长期在城市就业生活的农民工，除了户籍制度以外，其中的根本障碍就是住房问题。由于住房问题得不到解决，绝大多数农民工不得不采取就业工作常年在城市，逢年过节再临时回农村的“候鸟式”的生活方式，不得不造成“留守儿童”、“留守老人”以及夫妻分居的种种人生景象，不得不保留农村的居屋作为自己万不得已时的一种归宿和选择。\n　　第四，当前中国的名义城镇化率据统计已经达到全国总人口的53%，由1978年1.72亿增加到2011年底的近7亿，已经占全国总人口的50%以上，因此，住房问题，准确地说是城镇化人口的住房问题已经与中国农村农民的土地问题并列，上升为21世纪中国的两大基本问题之一。更要看到的是，根据有关规划，2030年中国城镇化率要达到70%以上，按2030年全国人口为15亿计算，就是2030年城镇化人口要达到10亿，将彻底改变中国绝大多数人口在农村的传统格局，实现绝大多数人口在城市的重大历史转折，住房问题将最终取代土地问题成为21世纪中国摆在改革发展、执政治国第一位的基本问题。\n　　第五，住房问题将决定当今中国的人心向背和天下兴亡，更加决定中国80后、90后这几代青年的社会政治选择。\n　　青年是住房问题中的主要群体和最为弱势的社会群体。只有真正解决住房问题，无房青年才可能在城市安身立命、安居乐业;中国特色社会主义才能在中国青年一代中站住脚，青年一代才可能真正在内心深处做到既爱国又爱党爱社会主义。\n　　第六，中国梦和中国特色道路已经把“住有所居”提高到了党和政府“对人民承诺”的高度。发达国家经过几十代绝大多数居民的贫民窟生活，才在20世纪50年代以后，大致解决了绝大多数人的“住有所居”问题，甚至在我国香港地区这样的地方，很多人也只能做到“住有所租”，成为终其一生的“房奴”。新兴大国俄罗斯目前基本上能够实现“住有所居”，但是究其原因一个靠的是苏联社会主义时期留下来的老底子，一个靠的是俄罗斯人口少、资源极为丰富的独特优势，其他新兴大国根本无法复制。\n　　印度、巴西、南非、墨西哥走的是私有化、多党制道路，都出现了严重的贫民窟问题，真正解决住房问题，起码还要牺牲好几代人的住房梦想及其体面而又有尊严的生活。\n　　一些人从欧美模式出发，片面地主张房地产市场化，公然反对“住有所居”的政策目标，甚至狂妄地认为一般老百姓本身就不应该有“住有所居”的奢想，能够“住有所租”就是不错的选择。历史和现实证明，中国要照这些人的主张，离开中国特色社会主义道路，根本就不可能从现在起就着手解决老百姓的住房问题。\n　　中国走的是以公有制为基础的共产党领导的中国特色社会主义道路，尽管仍然在与高房价进行艰难博弈，但是到目前为止，至少还没有出现其他新兴大国那么严重的贫民窟问题，而且住房问题已经被提到了中共中央政治局的国家最高决策层级，国家和政府制订的“十二五”规划已经提出了建设城镇保障性住房和棚户区改造住房3600万套(户)的指令性指标，习近平总书记已经亲自强调：“这是政府对人民的承诺，要全力完成。”党和国家领导人为解决老百姓的住房问题，已经到了千方百计、寝食难安的程度。中国的现代化，是社会主义现代化，中国人民尤其是生逢其世的中国80后、90后一代，在住房问题上，有可能也有权利要求有一种不同于前后资本主义国家那种贫民窟和以租为居、终身为“房奴”的前途与命运。\n　　当然，我们不可能也不是要求一次性解决所有人的住房问题，更不是要求取消房地产市场都来搞保障性住房建设。按照习总书记的讲话精神，我们已经找到了一条中国特色的住房建设道路，总的方向就是以政府为主提供基本保障、以市场为主满足多层次需求的住房供应体系。\n　　我们制定“十二五规划”规定建设保障性住房是3600万套(户)，再有几个五年规划，就可以在城镇化进程中依次逐步解决进城居民的住房问题，可以租房的形式短期过渡，尤其可以在每个中大型城市建设一批廉价租赁的“青年公寓”，以供青年人结婚生子的“过渡之用”。\n　　总之一句话，只要坚持社会主义道路，发挥社会主义集中力量办大事的优势，体现共产党为人民、讲政治的特点，把保障性住房建设和“青年公寓”安排上升到党政一把手业绩考核的高度，我们就能够在中华梦里开出一朵中国人个个可以“住有所居”灿烂花朵。(作者是中国人民大学教授)',24,NULL,NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

#
# Source for table "tags"
#

DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `tag_name` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "tags"
#

/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,1,'jquery'),(2,1,'习近平');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
