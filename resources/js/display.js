import $ from 'jquery';
import { indexOf } from 'lodash';


$( () => {
    videoPlayAndPauseHandler();
    setCookies();
    handleSets();
    handleVideoRow();
    
} );

function setCookies(){
    $('#rest-input').on('input',function(){
        if(parseInt($(this).val()) > 0 )
            document.cookie = `timer=${$(this).val()};`;
    });
}
function handleSets(){
    let intervalHolder;
    let bar;
    let seconds;
    $("#next-set").on('click',function(){
        seconds = parseInt(getCookie('timer'));
        console.log(seconds)
        if(intervalHolder)
            clearInterval(intervalHolder);
        $('#bar-container').css('display','flex');
        if($('#myBar'))
            $('#myBar').remove();
        
        $('#bar-container').append('<div id="myBar" class="label-center" style="width: 11rem;height:11rem;font-size:15px"></div>');
        
         bar = new ldBar('#myBar',{
           value:seconds,
           min:"0",
           max:seconds,
           type:"fill",
           path:"M9.32 15.653a.812.812 0 0 1-.086-.855c.176-.342.245-.733.2-1.118a2.106 2.106 0 0 0-.267-.779 2.027 2.027 0 0 0-.541-.606 3.96 3.96 0 0 1-1.481-2.282c-1.708 2.239-1.053 3.51-.235 4.63a.748.748 0 0 1-.014.901.87.87 0 0 1-.394.283.838.838 0 0 1-.478.023c-1.105-.27-2.145-.784-2.85-1.603a4.686 4.686 0 0 1-.906-1.555 4.811 4.811 0 0 1-.263-1.797s-.133-2.463 2.837-4.876c0 0 3.51-2.978 2.292-5.18a.621.621 0 0 1 .112-.653.558.558 0 0 1 .623-.147l.146.058a7.63 7.63 0 0 1 2.96 3.5c.58 1.413.576 3.06.184 4.527.325-.292.596-.641.801-1.033l.029-.064c.198-.477.821-.325 1.055-.013.086.137 2.292 3.343 1.107 6.048a5.516 5.516 0 0 1-1.84 2.027 6.127 6.127 0 0 1-2.138.893.834.834 0 0 1-.472-.038.867.867 0 0 1-.381-.29zM7.554 7.892a.422.422 0 0 1 .55.146c.04.059.066.126.075.198l.045.349c.02.511.014 1.045.213 1.536.206.504.526.95.932 1.298a3.06 3.06 0 0 1 1.16 1.422c.22.564.25 1.19.084 1.773a4.123 4.123 0 0 0 1.39-.757l.103-.084c.336-.277.613-.623.813-1.017.201-.393.322-.825.354-1.269.065-1.025-.284-2.054-.827-2.972-.248.36-.59.639-.985.804-.247.105-.509.17-.776.19a.792.792 0 0 1-.439-.1.832.832 0 0 1-.321-.328.825.825 0 0 1-.035-.729c.412-.972.54-2.05.365-3.097a5.874 5.874 0 0 0-1.642-3.16c-.156 2.205-2.417 4.258-2.881 4.7a3.537 3.537 0 0 1-.224.194c-2.426 1.965-2.26 3.755-2.26 3.834a3.678 3.678 0 0 0 .459 2.043c.365.645.89 1.177 1.52 1.54C4.5 12.808 4.5 10.89 7.183 8.14l.372-.25z",
           fill:"#e25822",
           'fill-dir':"btt",
           'fill-background':"#fdcf58",
           'fill-background-extrude':"0" ,
           'pattern-size':'200'
        }
        );
        $('body').css({
            'height':'100vh',
            'overflow': 'hidden'
        });
        intervalHolder = setInterval(() => {
            seconds--;
            bar.set(seconds,false);
            if(seconds === 0){
                clearInterval(intervalHolder);
                $('body').css({
                    'height':'',
                    'overflow': ''
            });
            $('#bar-container').css('display','none');
            const sets = parseInt($('h1[data-sets]').attr('data-sets'));
            let currentSet = parseInt($('h1[data-current-set]').attr('data-current-set'));
            if(sets > currentSet){
                $('h1[data-current-set]').attr('data-current-set',++currentSet);
                $('h1[data-current-set] span').text(`Sets ${currentSet}/${sets}`);
            }
            else{
                const exCounter = parseInt($('#div-videos-container[data-count]').attr('data-count'));
                let currentIndex = parseInt($('#video-display-container[data-index]').attr('data-index'));
                console.log(currentIndex , exCounter)
                if(currentIndex != exCounter){
                    $(`.video-row[data-index=${ ++currentIndex }]`).trigger('click');
                    console.log(`.video-row[data-index=${ currentIndex }]`)
                }
                else
                    location.replace('/programs');
            }
            }
    
        }, 1000);

    });
}
function videoPlayAndPauseHandler(){
    $('video').on('pause', function(){
        $('#media-player').attr('src','/pics/play-svgrepo-com (1).svg');
        $('#media-player').attr('data-action','play');
    });

    $('video').on('play', function(){
        $('#media-player').attr('src','/pics/media-pause-svgrepo-com.svg');
        $('#media-player').attr('data-action','pause');
    });

    $("#play-pause-btn").on('click', function(){
        const action =  $("#media-player").attr('data-action');
        if(action === 'play')
            $('video').trigger('play');
        else
            $('video').trigger('pause');
    });
}


function handleVideoRow(){
    $('.video-row').each( function(){
        $(this).on('click', function(){
            const { video, sets, repetitions, weight, muscle, exercise_name } = JSON.parse($(this).attr('data-exercise'));
            $('video').attr('src', `/${video}`);
            $('#sets-counter').text(sets);
            $('#reps-counter').text(repetitions);
            $('#weight-counter').text(weight);
            $('h1[data-current-set] span').text(`Sets 1/${sets}`);
            $('h1[data-sets]').attr('data-sets',sets);
            $('h1[data-current-set]').attr('data-current-set',1);
            $('#video-display-container[data-index]').attr('data-index',$(this).attr('data-index'));
            $('#ex-name').text(`${exercise_name}/${muscle}`);
        });
    });
}


function getCookie(key){
    const cookies = document.cookie.split(';');
    const cookie = cookies.find( cookie => cookie.includes(key)).replace(`${key}=`,'');
    return cookie;
}

