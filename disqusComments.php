<div id="comment"></div>

<script>
            var emojiList = [{
                code:'smile',
                title:'笑脸',
                unicode:'1f604'
            },{
                code:'mask',
                title:'生病',
                unicode:'1f637'
            },{
                code:'joy',
                title:'破涕为笑',
                unicode:'1f602'
            },{
                code:'stuck_out_tongue_closed_eyes',
                title:'吐舌',
                unicode:'1f61d'
            },{
                code:'flushed',
                title:'脸红',
                unicode:'1f633'
            },{
                code:'scream',
                title:'恐惧',
                unicode:'1f631'
            },{
                code:'pensive',
                title:'失望',
                unicode:'1f614'
            },{
                code:'unamused',
                title:'无语',
                unicode:'1f612'
            },{
                code:'grin',
                title:'露齿笑',
                unicode:'1f601'
            },{
                code:'heart_eyes',
                title:'色',
                unicode:'1f60d'
            },{
                code:'sweat',
                title:'汗',
                unicode:'1f613'
            },{
                code:'smirk',
                title:'得意',
                unicode:'1f60f'
            }];

            var disq = new iDisqus('comment', {
                forum: 'ggbond',
                site: 'https://www.ggbond.cc',
                api: 'https://www.ggbond.cc/wp-content/themes/fastblog/disqus-php-api/api',
                mode: 1,
                timeout: 3000,
                popular: document.getElementById('popular-posts'),
                init: true,
                emoji_list: emojiList,
                emoji_preview: true
            });
            disq.popular();
            disq.count();
</script>
