<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PuppiePlanet</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<meta name="google-signin-client_id" content="342708568954-r3jldm37eugcnsgbg1d48d48006fncvi.apps.googleusercontent.com">
    	<link href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    	<link href="<?= base_url(); ?>assets/css/button.css" rel="stylesheet"/>
    	<link href="<?= base_url(); ?>assets/css/logo.css" rel="stylesheet"/>
    	<link href="<?= base_url(); ?>assets/css/footer.css" rel="stylesheet"/>
    	<link href="<?= base_url(); ?>assets/css/subrayado.css" rel="stylesheet"/>
    	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/vanilla-datatables/dist/vanilla-dataTables.min.css">
        <link href="<?= base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container-fluid">

        	<div id="ig_app" class="row">
           
				<section id="ig_header" class="col-12">

					<div class="row">
						<div class="col-8">
							<img src="<?= base_url(); ?>assets/images/logo.png" alt="">
							<i class="fa fa-chevron-down ml-1"></i>
						</div>

						<div class="col-4 text-right">
							<i class="fa fa-plus-square-o" id="ig_add_post"></i>
							<span id="ig_message">
								<i class="fa fa-bolt"></i>
								<i class="fa fa-comment-o"></i>
							</span>
						</div>
					</div>

				</section>

				<section id="ig_header_stories" class="col-12">

					<div class="row">
						
						<div class="col-3 text-center ig_user">
							<span class="ig_story_img">
								<img src="<?= base_url(); ?>assets/images/imgs/user.jpg" alt="" class="img-thumbnail">
							</span>
							<span class="ig_add_story">+</span>
							<span class="ig_story_caption">
								Your story
							</span>
						</div>
						<div class="col-3 text-center ig_user ig_friend">
							<span class="ig_story_img">
								<img src="<?= base_url(); ?>assets/images/imgs/2.jpg" alt="">
							</span>
							<span class="ig_story_caption">
								steve.daws..
							</span>
						</div>
						<div class="col-3 text-center ig_user ig_friend">
							<span class="ig_story_img">
								<img src="<?= base_url(); ?>assets/images/imgs/3.jpg" alt="">
							</span>
							<span class="ig_story_caption">
								ammy.jack..
							</span>
						</div>
						<div class="col-3 text-center ig_user ig_friend">
							<span class="ig_story_img">
								<img src="<?= base_url(); ?>assets/images/imgs/7.jpg" alt="">
							</span>
							<span class="ig_story_caption">
								mali.knorr
							</span>
						</div>

					</div>

				</section>    

				<section id="ig_posts" class="col-12">

					<div class="row">
						
						<div class="col-12 pl-0 pr-0">
							<div class="ig_post_head pl-3">
								<ul>
									<li>
										<img src="<?= base_url(); ?>assets/images/imgs/user.jpg" alt="" class="post_head_img">
									</li>
									<li>
										<div class="ig_post_name_desc">
											amit7soni
											<span>
												Kalyan, Mumbai, India
											</span>	
										</div>
									</li>
									<li>
										<span class="ig_post_options"></span>
									</li>
								</ul>
							</div>
							<div class="ig_post_content">
								<img src="<?= base_url(); ?>assets/images/imgs/post-2.jpg" alt="">
								<!--<video id="ig_video" loop muted>
								  <source src="imgs/codefrog_dev.m4v" type="video/mp4">
								</video>-->
							</div>
							<div class="ig_post_content_info">
								<div class="ig_post_action">
									<ul>
										<li>
											<i class="fa fa-heart-o"></i>
										</li>
										<li>
											<i class="fa fa-comment-o"></i>
										</li>
										<li>
											<i class="fa fa-paper-plane-o"></i>
										</li>
										<li>
											<i class="fa fa-bookmark-o"></i>
										</li>
									</ul>
								</div>
								<div class="ig_post_likes">
									<span class="ig_user_imgs">
										<img src="<?= base_url(); ?>assets/images/imgs/1.jpg" alt="">
										<img src="<?= base_url(); ?>assets/images/imgs/2.jpg" alt="">
										<img src="<?= base_url(); ?>assets/images/imgs/3.jpg" alt="">
									</span>
									Liked by <span>amit7soni</span> and <span>3,606 others</span>
								</div>
								<div class="ig_post_details">
									<span class="ig_user">amit7soni</span>
									Banking Mobile App - UI Design 
									<span class="ig_tags">#codefrog #uidesign #uxdesign</span>
									<span class="ig_more">... more</span>
								</div>
								<div class="ig_post_comments">
									View all 5 comments
								</div>
								<div class="ig_post_datetime">
									2 hours ago 
								</div>
							</div>
							
						</div>

					</div>
					
					<div class="row">
						
						<div class="col-12 pl-0 pr-0">
							<div class="ig_post_head pl-3">
								<ul>
									<li>
										<img src="<?= base_url(); ?>assets/images/imgs/cf.jpg" alt="" class="post_head_img">
									</li>
									<li>
										<div class="ig_post_name_desc">
											codefrogshow
											<span>
												Mumbai, India
											</span>	
										</div>
									</li>
									<li>
										<span class="ig_post_options"></span>
									</li>
								</ul>
							</div>
							<div class="ig_post_content">
								<img src="<?= base_url(); ?>assets/images/imgs/post-3.jpg" alt="">
							</div>
							<div class="ig_post_action">
								<ul>
									<li class="ig_liked">
										<i class="fa fa-heart"></i>
									</li>
									<li>
										<i class="fa fa-comment-o"></i>
									</li>
									<li>
										<i class="fa fa-paper-plane-o"></i>
									</li>
									<li>
										<i class="fa fa-bookmark-o"></i>
									</li>
								</ul>
							</div>
							<div class="ig_post_likes">
								<span class="ig_user_imgs">
									<img src="<?= base_url(); ?>assets/images/imgs/user.jpg" alt="">
									<img src="<?= base_url(); ?>assets/images/imgs/6.jpg" alt="">
									<img src="<?= base_url(); ?>assets/images/imgs/cf.jpg" alt="">
								</span>
								Liked by <span>amit7soni</span> and <span>3,606 others</span>
							</div>
							<div class="ig_post_details">
								<span class="ig_user">codefrogshow</span>
								Florest App - UI Design 
								<span class="ig_tags">#codefrog #uidesign #uxdesign</span>
								<span class="ig_more">... more</span>
							</div>
							<div class="ig_post_comments">
								View all 3 comments
							</div>
							<div class="ig_post_datetime">
								8 hours ago 
							</div>
						</div>

					</div>

					<div class="row">
						
						<div class="col-12 pl-0 pr-0">
							<div class="ig_post_head pl-3">
								<ul>
									<li>
										<img src="<?= base_url(); ?>assets/images/imgs/cf.jpg" alt="" class="post_head_img">
									</li>
									<li>
										<div class="ig_post_name_desc">
											codefrogshow
											<span>
												Mumbai, India
											</span>	
										</div>
									</li>
									<li>
										<span class="ig_post_options"></span>
									</li>
								</ul>
							</div>
							<div class="ig_post_content">
								<img src="<?= base_url(); ?>assets/images/imgs/post-4.jpg" alt="">
							</div>
							<div class="ig_post_action">
								<ul>
									<li>
										<i class="fa fa-heart-o"></i>
									</li>
									<li>
										<i class="fa fa-comment-o"></i>
									</li>
									<li>
										<i class="fa fa-paper-plane-o"></i>
									</li>
									<li>
										<i class="fa fa-bookmark-o"></i>
									</li>
								</ul>
							</div>
							<div class="ig_post_likes">
								<span class="ig_user_imgs">
									<img src="<?= base_url(); ?>assets/images/imgs/cf.jpg" alt="">
									<img src="<?= base_url(); ?>assets/images/imgs/1.jpg" alt="">
									<img src="<?= base_url(); ?>assets/images/imgs/6.jpg" alt="">
								</span>
								Liked by <span>codefrogshow</span> and <span>3,606 others</span>
							</div>
							<div class="ig_post_details">
								<span class="ig_user">codefrogshow</span>
								Banking Mobile App - UI Design 
								<span class="ig_tags">#codefrog #uidesign #uxdesign</span>
								<span class="ig_more">... more</span>
							</div>
							<div class="ig_post_comments">
								View all 2 comments
							</div>
							<div class="ig_post_datetime">
								2 days ago 
							</div>
						</div>

					</div>

					<div class="row">
						
						<div class="col-12 pl-0 pr-0">
							<div class="ig_post_head pl-3">
								<ul>
									<li>
										<img src="<?= base_url(); ?>assets/images/imgs/cf.jpg" alt="" class="post_head_img">
									</li>
									<li>
										<div class="ig_post_name_desc">
											codefrogshow
											<span>
												Mumbai, India
											</span>	
										</div>
									</li>
									<li>
										<span class="ig_post_options"></span>
									</li>
								</ul>
							</div>
							<div class="ig_post_content">
								<img src="<?= base_url(); ?>assets/images/imgs/post-2.jpg" alt="">
							</div>
							<div class="ig_post_action">
								<ul>
									<li>
										<i class="fa fa-heart-o"></i>
									</li>
									<li>
										<i class="fa fa-comment-o"></i>
									</li>
									<li>
										<i class="fa fa-paper-plane-o"></i>
									</li>
									<li>
										<i class="fa fa-bookmark-o"></i>
									</li>
								</ul>
							</div>
							<div class="ig_post_likes">
								<span class="ig_user_imgs">
									<img src="<?= base_url(); ?>assets/images/imgs/1.jpg" alt="">
									<img src="<?= base_url(); ?>assets/images/imgs/2.jpg" alt="">
									<img src="<?= base_url(); ?>assets/images/imgs/3.jpg" alt="">
								</span>
								Liked by <span>amit7soni</span> and <span>3,606 others</span>
							</div>
							<div class="ig_post_details">
								<span class="ig_user">amit7soni</span>
								Banking Mobile App - UI Design 
								<span class="ig_tags">#codefrog #uidesign #uxdesign</span>
								<span class="ig_more">... more</span>
							</div>
							<div class="ig_post_comments">
								View all 5 comments
							</div>
							<div class="ig_post_datetime">
								2 hours ago 
							</div>
						</div>

					</div>

					<div class="row">
						
						<div class="col-12 pl-0 pr-0">
							<div class="ig_post_head pl-3">
								<ul>
									<li>
										<img src="<?= base_url(); ?>assets/images/imgs/cf.jpg" alt="" class="post_head_img">
									</li>
									<li>
										<div class="ig_post_name_desc">
											codefrogshow
											<span>
												Mumbai, India
											</span>	
										</div>
									</li>
									<li>
										<span class="ig_post_options"></span>
									</li>
								</ul>
							</div>
							<div class="ig_post_content">
								<img src="<?= base_url(); ?>assets/images/imgs/post-3.jpg" alt="">
							</div>
							<div class="ig_post_action">
								<ul>
									<li class="ig_liked">
										<i class="fa fa-heart"></i>
									</li>
									<li>
										<i class="fa fa-comment-o"></i>
									</li>
									<li>
										<i class="fa fa-paper-plane-o"></i>
									</li>
									<li>
										<i class="fa fa-bookmark-o"></i>
									</li>
								</ul>
							</div>
							<div class="ig_post_likes">
								<span class="ig_user_imgs">
									<img src="<?= base_url(); ?>assets/images/imgs/user.jpg" alt="">
									<img src="<?= base_url(); ?>assets/images/imgs/6.jpg" alt="">
									<img src="<?= base_url(); ?>assets/images/imgs/cf.jpg" alt="">
								</span>
								Liked by <span>amit7soni</span> and <span>3,606 others</span>
							</div>
							<div class="ig_post_details">
								<span class="ig_user">codefrogshow</span>
								Florest App - UI Design 
								<span class="ig_tags">#codefrog #uidesign #uxdesign</span>
								<span class="ig_more">... more</span>
							</div>
							<div class="ig_post_comments">
								View all 3 comments
							</div>
							<div class="ig_post_datetime">
								8 hours ago 
							</div>
						</div>

					</div>

					<div class="row">
						
						<div class="col-12 pl-0 pr-0">
							<div class="ig_post_head pl-3">
								<ul>
									<li>
										<img src="<?= base_url(); ?>assets/images/imgs/cf.jpg" alt="" class="post_head_img">
									</li>
									<li>
										<div class="ig_post_name_desc">
											codefrogshow
											<span>
												Mumbai, India
											</span>	
										</div>
									</li>
									<li>
										<span class="ig_post_options"></span>
									</li>
								</ul>
							</div>
							<div class="ig_post_content">
								<img src="<?= base_url(); ?>assets/images/imgs/post-4.jpg" alt="">
							</div>
							<div class="ig_post_action">
								<ul>
									<li>
										<i class="fa fa-heart-o"></i>
									</li>
									<li>
										<i class="fa fa-comment-o"></i>
									</li>
									<li>
										<i class="fa fa-paper-plane-o"></i>
									</li>
									<li>
										<i class="fa fa-bookmark-o"></i>
									</li>
								</ul>
							</div>
							<div class="ig_post_likes">
								<span class="ig_user_imgs">
									<img src="<?= base_url(); ?>assets/images/imgs/cf.jpg" alt="">
									<img src="<?= base_url(); ?>assets/images/imgs/1.jpg" alt="">
									<img src="<?= base_url(); ?>assets/images/imgs/6.jpg" alt="">
								</span>
								Liked by <span>codefrogshow</span> and <span>3,606 others</span>
							</div>
							<div class="ig_post_details">
								<span class="ig_user">codefrogshow</span>
								Banking Mobile App - UI Design 
								<span class="ig_tags">#codefrog #uidesign #uxdesign</span>
								<span class="ig_more">... more</span>
							</div>
							<div class="ig_post_comments">
								View all 2 comments
							</div>
							<div class="ig_post_datetime">
								2 days ago 
							</div>
						</div>

					</div>

					<div class="row">
						
						<div class="col-12 pl-0 pr-0">
							<div class="ig_post_head pl-3">
								<ul>
									<li>
										<img src="<?= base_url(); ?>assets/images/imgs/user.jpg" alt="" class="post_head_img">
									</li>
									<li>
										<div class="ig_post_name_desc">
											amit7soni
											<span>
												Kalyan, Mumbai, India
											</span>	
										</div>
									</li>
									<li>
										<span class="ig_post_options"></span>
									</li>
								</ul>
							</div>
							<div class="ig_post_content">
								<img src="<?= base_url(); ?>assets/images/imgs/post-2.jpg" alt="">
							</div>
							<div class="ig_post_action">
								<ul>
									<li>
										<i class="fa fa-heart-o"></i>
									</li>
									<li>
										<i class="fa fa-comment-o"></i>
									</li>
									<li>
										<i class="fa fa-paper-plane-o"></i>
									</li>
									<li>
										<i class="fa fa-bookmark-o"></i>
									</li>
								</ul>
							</div>
							<div class="ig_post_likes">
								<span class="ig_user_imgs">
									<img src="<?= base_url(); ?>assets/images/imgs/1.jpg" alt="">
									<img src="<?= base_url(); ?>assets/images/imgs/2.jpg" alt="">
									<img src="<?= base_url(); ?>assets/images/imgs/3.jpg" alt="">
								</span>
								Liked by <span>amit7soni</span> and <span>3,606 others</span>
							</div>
							<div class="ig_post_details">
								<span class="ig_user">amit7soni</span>
								Banking Mobile App - UI Design 
								<span class="ig_tags">#codefrog #uidesign #uxdesign</span>
								<span class="ig_more">... more</span>
							</div>
							<div class="ig_post_comments">
								View all 5 comments
							</div>
							<div class="ig_post_datetime">
								2 hours ago 
							</div>
						</div>

					</div>

					<div class="row">
						
						<div class="col-12 pl-0 pr-0">
							<div class="ig_post_head pl-3">
								<ul>
									<li>
										<img src="<?= base_url(); ?>assets/images/imgs/cf.jpg" alt="" class="post_head_img">
									</li>
									<li>
										<div class="ig_post_name_desc">
											codefrogshow
											<span>
												Mumbai, India
											</span>	
										</div>
									</li>
									<li>
										<span class="ig_post_options"></span>
									</li>
								</ul>
							</div>
							<div class="ig_post_content">
								<img src="<?= base_url(); ?>assets/images/imgs/post-3.jpg" alt="">
							</div>
							<div class="ig_post_action">
								<ul>
									<li class="ig_liked">
										<i class="fa fa-heart"></i>
									</li>
									<li>
										<i class="fa fa-comment-o"></i>
									</li>
									<li>
										<i class="fa fa-paper-plane-o"></i>
									</li>
									<li>
										<i class="fa fa-bookmark-o"></i>
									</li>
								</ul>
							</div>
							<div class="ig_post_likes">
								<span class="ig_user_imgs">
									<img src="<?= base_url(); ?>assets/images/imgs/user.jpg" alt="">
									<img src="<?= base_url(); ?>assets/images/imgs/6.jpg" alt="">
									<img src="<?= base_url(); ?>assets/images/imgs/cf.jpg" alt="">
								</span>
								Liked by <span>amit7soni</span> and <span>3,606 others</span>
							</div>
							<div class="ig_post_details">
								<span class="ig_user">codefrogshow</span>
								Florest App - UI Design 
								<span class="ig_tags">#codefrog #uidesign #uxdesign</span>
								<span class="ig_more">... more</span>
							</div>
							<div class="ig_post_comments">
								View all 3 comments
							</div>
							<div class="ig_post_datetime">
								8 hours ago 
							</div>
						</div>

					</div>

					<div class="row">
						
						<div class="col-12 pl-0 pr-0">
							<div class="ig_post_head pl-3">
								<ul>
									<li>
										<img src="<?= base_url(); ?>assets/images/imgs/cf.jpg" alt="" class="post_head_img">
									</li>
									<li>
										<div class="ig_post_name_desc">
											codefrogshow
											<span>
												Mumbai, India
											</span>	
										</div>
									</li>
									<li>
										<span class="ig_post_options"></span>
									</li>
								</ul>
							</div>
							<div class="ig_post_content">
								<img src="<?= base_url(); ?>assets/images/imgs/post-4.jpg" alt="">
							</div>
							<div class="ig_post_action">
								<ul>
									<li>
										<i class="fa fa-heart-o"></i>
									</li>
									<li>
										<i class="fa fa-comment-o"></i>
									</li>
									<li>
										<i class="fa fa-paper-plane-o"></i>
									</li>
									<li>
										<i class="fa fa-bookmark-o"></i>
									</li>
								</ul>
							</div>
							<div class="ig_post_likes">
								<span class="ig_user_imgs">
									<img src="<?= base_url(); ?>assets/images/imgs/cf.jpg" alt="">
									<img src="<?= base_url(); ?>assets/images/imgs/1.jpg" alt="">
									<img src="<?= base_url(); ?>assets/images/imgs/6.jpg" alt="">
								</span>
								Liked by <span>codefrogshow</span> and <span>3,606 others</span>
							</div>
							<div class="ig_post_details">
								<span class="ig_user">codefrogshow</span>
								Banking Mobile App - UI Design 
								<span class="ig_tags">#codefrog #uidesign #uxdesign</span>
								<span class="ig_more">... more</span>
							</div>
							<div class="ig_post_comments">
								View all 2 comments
							</div>
							<div class="ig_post_datetime">
								2 days ago 
							</div>
						</div>

					</div>
				

				</section>

				<section id="ig_footer" class="justify-content-center align-self-center">
					<ul>
						<li>
							<i class="fa fa-home"></i>
						</li>
						<li>
							<i class="fa fa-search"></i>
						</li>
						<li>
							<i class="fa fa-video-camera"></i>
						</li>
						<li>
							<i class="fa fa-heart-o"></i>
						</li>
						<li>
							<img src="<?= base_url(); ?>assets/images/imgs/user.jpg" alt="">
						</li>
					</ul>
				</section>

	        </div>

        </div>
        
	    <script src="<?= base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/custom.js" type="text/javascript"></script>
    </body>
</html>