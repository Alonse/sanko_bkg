jQuery(function ($) {
    $('.center-filter__item').click(function(){
        // if(this.getAttribute("data-id")){
            let data = {
                id: this.getAttribute("data-id")
            };

            $.ajax({
                url:'/wp-content/themes/Sanko/src2/filterBlog.php',
                data:data,
                type:'POST',
                success:function(mes){
                    if(mes) {
                        document.querySelector('.center-filter__result').innerHTML = mes;
                        document.querySelector('#true_loadmore').style.display = 'block';
                    } else {
                        console.log('error');
                    }
                }
            });
        // }
        
    });

    let post = $(".center-filter__result-item");
    let locBlog = window.location.pathname.split('/');
    var path = locBlog.join('');

    $(".center-filter__item:nth-child(1)").addClass("center-filter__item_active");
    $(".center-filter__item").click(function () {
        $(".center-filter__item").removeClass("center-filter__item_active");
        $(this).addClass("center-filter__item_active");
    });

    $('.center-filter__categories-item').each(function () {
        let filter = $(this).data('filter');
        console.log(filter);
        if(path === filter) {
            $(this).click();
        }
    });

    $('.center-filter__result-item').each(function () {
        let category = $(this).data('cat');
        console.log(category);
        if(path === category) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });

    $("[data-filter]").on("click", filterByCategory);
    $("[data-tag]").on("click", filterByTag);


    let filterVal = $(".center-filter__categories-item:first-child").data("filter");
    post.each(function (i, item) {
        let qItem = $(item);

        console.log( "item cat", qItem.data("cat"));
        if(filterVal === 'all') {
            qItem.show()
        } else {
            if (qItem.data("cat") !== filterVal){
                qItem.hide();
                qItem.removeClass("act");
            }else{
                qItem.show();
                qItem.addClass("act");

            }

        }
    })
    
    function filterByCategory() {
        let filterVal = $(this).data("filter");
        post.each(function (i, item) {
            let qItem = $(item);

            console.log( "item cat", qItem.data("cat"));
            if(filterVal === 'all') {
                qItem.show()
            } else {
                if (qItem.data("cat") !== filterVal){
                    qItem.hide();
                    qItem.removeClass("act");
                }else{
                    qItem.show();
                    qItem.addClass("act");

                }

            }
        })
    }

    function filterByTag() {
        post.each(function(i, elem){
            let qTag = $(elem);
            if(post.hasClass("act")){
                qTag.show()
            } else {
                qTag.hide()
            }
        })
    }
})