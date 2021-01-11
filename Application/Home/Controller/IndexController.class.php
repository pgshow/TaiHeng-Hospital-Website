<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class IndexController extends Controller {
	
    protected function _initialize(){
        /* 读取站点配置 */
        $config = api('Config/lists');
        C($config); //添加配置

        if(!C('WEB_SITE_CLOSE')){
            $this->error('站点已经关闭，请稍后访问~');
        }
		
		//控制科室的导航条
		$this->assign('office_menu', get_menu2());
    }
	
    public function index(){
		
		/* 读取首页精彩专题 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_special"; //表2
		
		//联合查询
		$r_special = $db -> field( "$a.id, $a.title, $a.description, $b.url, $b.cover" ) ->
        join( "$b on $a.id = $b.id" ) ->
        where( "$a.model_id = 5 and status = 1 and position >= 4 and category_id != 265 and category_id != 266" ) ->
		order('level DESC, id DESC')->
        limit(8) ->
        select();
		
		$this -> assign('r_special', $r_special);
		
		
		
		
		/* 读取首页公益活动 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_special"; //表2
		
		//联合查询
		$benefit = $db -> field( "$a.id, $a.title, $a.description, $b.url, $b.cover" ) ->
        join( "$b on $a.id = $b.id" ) ->
        where( "$a.model_id = 5 and status = 1 and category_id = 265" ) ->
		order('level DESC, id DESC')->
        select();
		
		$this -> assign('benefit', $benefit);
		
		
		
		
		
		/* 读取首页精品科室 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_special"; //表2
		
		//联合查询
		$boutique = $db -> field( "$a.id, $a.title, $a.description, $b.url, $b.cover" ) ->
        join( "$b on $a.id = $b.id" ) ->
        where( "$a.model_id = 5 and status = 1 and category_id = 266" ) ->
		order('level DESC, id DESC')->
        select();
		
		$this -> assign('boutique', $boutique);
		
		
		
		
		/* 读取荣誉资质 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_news"; //表2
		
		//联合查询
		$honor_list = $db -> field( "$a.id, $a.title, $a.cover_id" ) ->
		join( "$b on $a.id = $b.id" ) ->
		where( "$a.category_id = 74 and status = 1" ) ->
		order('level DESC, id DESC')->
		limit(18) ->
		select();
		
		$this -> assign('honor_list', $honor_list);
		
				
		
		
		/* 知名专家 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_specialist"; //表2
		
		$r_specialist = $db -> field( "$a.id, $a.title, $b.photo, $b.situation" ) ->
        join( "$b on $a.id = $b.id" ) ->
        where( "$a.category_id = 47 and status = 1 and position >= 4" ) ->
		order('level DESC, id DESC')->
        limit(6) ->
        select();
		
		$this -> assign('r_specialist', $r_specialist);

		
		
		
		/* 前沿设备 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_armarium"; //表2
		
		$r_armarium = $db -> field( "$a.id, $a.title, $b.office_img, $b.url" ) ->
        join( "$b on $a.id = $b.id" ) ->
        where( "(status = 1) and (position >= 4)" ) ->
		order('level DESC, id DESC')->
        limit(6) ->
        select();
		
		$this -> assign('r_armarium', $r_armarium);
		
		
		
		
		/* 飞秒全激光 */
		$Model = new Model();
		$index_1_sql = "select id, title, create_time
		from tth_document
		where category_id in (select id from tth_category where pid = 88)
		and (status = 1) and (position >= 4) order by id desc limit 6";
			
		$index_1 = $Model -> query($index_1_sql);
		
		//读取本疾病简介
		if($index_1){
			
			$a = "tth_document"; //表1
			$b = "tth_document_topic"; //表2
			
			$topic_info_1 = $db -> field( "$a.id, $a.title, $b.banner, $b.banner_text" ) ->
			join( "$b on $a.id = $b.id" ) ->
			where( "$a.category_id = 88 and status = 1" ) ->
			limit(1) ->
			select();
				
			//把简介以数组形式放入栏目
			$index_1['intro'] = $topic_info_1[0];
		}
		
		$this -> assign('index_1', $index_1);
		
		
		
		
		/* 准分子激光 */
		$index_2_sql = "select id, title, create_time
		from tth_document
		where category_id in (select id from tth_category where pid = 86)
		and (status = 1) and (position >= 4) order by id desc limit 6";
			
		$index_2 = $Model -> query($index_2_sql);
		
		//读取本疾病简介
		if($index_2){
			
			$a = "tth_document"; //表1
			$b = "tth_document_topic"; //表2
			
			$topic_info_2 = $db -> field( "$a.id, $a.title, $b.banner, $b.banner_text" ) ->
			join( "$b on $a.id = $b.id" ) ->
			where( "$a.category_id = 86 and status = 1" ) ->
			limit(1) ->
			select();
				
			//把简介以数组形式放入栏目
			$index_2['intro'] = $topic_info_2[0];
		}
		
		$this -> assign('index_2', $index_2);
		
		
		
		
		/* 近视眼 */
		$index_3_sql = "select id, title, create_time
		from tth_document
		where category_id in (select id from tth_category where pid = 57)
		and (status = 1) and (position >= 4) order by id desc limit 6";
			
		$index_3 = $Model -> query($index_3_sql);
		

		
		//读取本疾病简介
		if($index_3){
			
			$a = "tth_document"; //表1
			$b = "tth_document_topic"; //表2
			
			$topic_info_3 = $db -> field( "$a.id, $a.title, $b.banner, $b.banner_text" ) ->
			join( "$b on $a.id = $b.id" ) ->
			where( "$a.category_id = 57 and status = 1" ) ->
			limit(1) ->
			select();
				
			//把简介以数组形式放入栏目
			$index_3['intro'] = $topic_info_3[0];
		}
		
		$this -> assign('index_3', $index_3);
		
		
		
		
		/* 高度近视 */
		$index_4_sql = "select id, title, create_time
		from tth_document
		where category_id in (select id from tth_category where pid = 58)
		and (status = 1) and (position >= 4) order by id desc limit 6";
			
		$index_4 = $Model -> query($index_4_sql);
		
		//读取本疾病简介
		if($index_4){
							
			$a = "tth_document"; //表1
			$b = "tth_document_topic"; //表2
			
			$topic_info_4 = $db -> field( "$a.id, $a.title, $b.banner, $b.banner_text" ) ->
			join( "$b on $a.id = $b.id" ) ->
			where( "$a.category_id = 58 and status = 1" ) ->
			limit(1) ->
			select();
				
			//把简介以数组形式放入栏目
			$index_4['intro'] = $topic_info_4[0];
		}
		
		$this -> assign('index_4', $index_4);
		
		
		
		
		/* 医院新闻 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_news"; //表2
		
		//联合查询
		$news_list = $db -> field( "$a.id, $a.title, $a.description, $a.cover_id" ) ->
		join( "$b on $a.id = $b.id" ) ->
		where( "$a.category_id = 70 and status = 1 and position >= 4" ) ->
		order('id desc')->
		limit(4) ->
		select();
		
		$this->assign('news_list', $news_list);
		
		
		
		
		/* 媒体报道 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_news"; //表2
		
		//联合查询
		$report_list = $db -> field( "$a.id, $a.title, $a.description, $a.cover_id" ) ->
		join( "$b on $a.id = $b.id" ) ->
		where( "$a.category_id = 71 and status = 1 and position >= 4" ) ->
		order('id desc')->
		limit(4) ->
		select();
		
		$this->assign('report_list', $report_list);
		
		
		
		
		/* 成功案例 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_news"; //表2
		
		//联合查询
		$success_list = $db -> field( "$a.id, $a.title, $a.description, $a.cover_id" ) ->
		join( "$b on $a.id = $b.id" ) ->
		where( "$a.category_id = 75 and status = 1 and position >= 4" ) ->
		order('id desc')->
		limit(4) ->
		select();
		
		$this->assign('success_list', $success_list);
		
		
		
		
		/* 专家答疑 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_news"; //表2
		
		//联合查询
		$answer_list = $db -> field( "$a.id, $a.title, $a.description, $a.cover_id" ) ->
		join( "$b on $a.id = $b.id" ) ->
		where( "$a.category_id = 72 and status = 1 and position >= 4" ) ->
		order('id desc')->
		limit(4) ->
		select();
		
		$this->assign('answer_list', $answer_list);
		
		
		
		
		/* 公益印记 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_news"; //表2
		
		//联合查询
		$welfare_list = $db -> field( "$a.id, $a.title, $a.description, $a.cover_id" ) ->
		join( "$b on $a.id = $b.id" ) ->
		where( "$a.category_id = 73 and status = 1 and position >= 4" ) ->
		order('id desc')->
		limit(4) ->
		select();
		
		$this->assign('welfare_list', $welfare_list);
		
		
		
		
		
		/* 视频资讯 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_video"; //表2
		
		//联合查询
		$video_index = $db -> field( "$a.id, $a.title, $a.cover_id, $b.video_url" ) ->
		join( "$b on $a.id = $b.id" ) ->
		where( "$a.category_id = 49 and status = 1 and position >= 4" ) ->
		order('level DESC, id DESC')->
		limit(1) ->
		select();
		
		$this->assign('video_index', $video_index);
		
		
		
		
		
		/* 友情链接 */
		$links = M('links') -> field( "title, link" ) -> where("status = 1") -> order('sort asc')-> select();
		
		$this->assign('links', $links);
		
		
		$this->assign('INDEX_ICON_MENU', C('INDEX_ICON_MENU'));
		
		
		//输出首页
		$this->display();
	}
}