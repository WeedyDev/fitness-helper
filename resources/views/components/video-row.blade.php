<div class="video-row">
    
    <img src="/{{$exercise->thumbnail}}">
    <div>
        <h6 styl>
            {{$exercise->exercise_name}}
        </h6>
        <p>
            {{$exercise->sets}}
            <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.5 15C18.9558 18.0448 15.7622 21 12 21C7.14776 21 3.58529 17.5101 3 13" stroke="black" stroke-width="2" stroke-linecap="round"/>
                <path d="M3.5 9C4.89106 5.64934 8.0647 3 12 3C16.7819 3 20.4232 6.48993 21 11" stroke="black" stroke-width="2" stroke-linecap="round"/>
                <path d="M21 21L21 15.6C21 15.2686 20.7314 15 20.4 15V15L15 15" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9 9L3.6 9V9C3.26863 9 3 8.73137 3 8.4L3 3" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            {{$exercise->repetitions}}
            <svg width="15px" height="15px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--emojione" preserveAspectRatio="xMidYMid meet">

                <g fill="black">

                <path d="M39.5 61.1l-6.4-8.7h-.8c-5.6 0-10.2-3.6-10.2-8V25h8l-14-19.2L2 25h8v19.4c0 4.7 2.3 9.1 6.6 12.4c4.2 3.3 9.8 5.2 15.8 5.2c2.4 0 4.8-.3 7.1-.9">

                </path>

                <path d="M31.7 11.6c5.6 0 10.2 3.6 10.2 8v19.5h-8L48 58.3l14-19.2h-8V19.6c0-4.7-2.3-9.1-6.5-12.4C43.3 3.8 37.7 2 31.7 2c-2.5 0-4.9.3-7.2.9l6.4 8.7h.8">

                </path>

                </g>
            </svg>
            {{$exercise->weight}}
            <svg fill="black" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
            width="27px" height="27px" viewBox="0 0 161.096 161.096"
            xml:space="preserve">
            <g>
                <path d="M109.729,29.182c-10.838,0-20.886,3.39-29.177,9.144c-8.602-5.962-18.631-9.144-29.187-9.144
                    C23.04,29.182,0,52.222,0,80.548c0,28.328,23.04,51.365,51.366,51.365c10.556,0,20.581-3.174,29.182-9.145
                    c8.296,5.741,18.344,9.145,29.182,9.145c28.328,0,51.366-23.037,51.366-51.365C161.096,52.222,138.058,29.182,109.729,29.182z
                    M51.366,123.509c-23.69,0-42.961-19.263-42.961-42.961c0-23.692,19.271-42.96,42.961-42.96c8.014,0,15.613,2.281,22.334,6.409
                    c-6.539,6.449-11.325,14.651-13.671,23.819c-2.471-1.688-5.451-2.678-8.663-2.678c-8.501,0-15.414,6.915-15.414,15.41
                    c0,8.498,6.913,15.409,15.414,15.409c3.212,0,6.192-0.99,8.663-2.686c2.346,9.175,7.127,17.378,13.671,23.823
                    C66.972,121.227,59.375,123.509,51.366,123.509z M58.364,80.569c-0.01,3.859-3.143,6.988-6.999,6.988
                    c-3.866,0-7.009-3.151-7.009-7.004c0-3.86,3.143-7.004,7.009-7.004c3.856,0,6.989,3.132,6.999,6.987c0,0.007,0,0.012,0,0.022
                    C58.364,80.569,58.364,80.559,58.364,80.569z M109.729,123.509c-23.677,0-42.938-19.263-42.96-42.929c0-0.012,0-0.021,0-0.032
                    c0-0.012,0-0.022,0-0.033c0.018-23.674,19.284-42.927,42.96-42.927c23.69,0,42.961,19.268,42.961,42.96
                    C152.69,104.247,133.42,123.509,109.729,123.509z M109.729,65.139c-8.498,0-15.408,6.915-15.408,15.41
                    c0,8.498,6.91,15.409,15.408,15.409s15.417-6.911,15.417-15.409C125.146,72.054,118.228,65.139,109.729,65.139z M109.729,87.552
                    c-3.857,0-7.004-3.146-7.004-7.004c0-3.861,3.146-7.005,7.004-7.005c3.869,0,7.012,3.144,7.012,7.005
                    C116.741,84.406,113.599,87.552,109.729,87.552z M100.531,60.326h-1.663V44.48h1.652h1.664v6.56l6.064-6.56h2.11h2.119
                    l-6.331,6.464l6.751,9.381h-2.165h-2.167l-4.785-6.971l-1.606,1.647v5.324H100.531z M118.88,60.386c1.274,0,2.261-0.47,2.943-1.412
                    l0.246-0.375v1.445c0,0.971-0.191,1.667-0.569,2.085c-0.383,0.421-1.018,0.629-1.871,0.629c-0.711,0-1.248-0.09-1.587-0.271
                    c-0.343-0.183-0.525-0.476-0.558-0.878h-3.36c0.06,1.098,0.563,1.959,1.511,2.584c0.94,0.62,2.215,0.935,3.808,0.935
                    c1.938,0,3.365-0.443,4.285-1.321c0.919-0.881,1.378-2.249,1.378-4.1V48.603h-2.915v1.715c-0.121-0.219-0.241-0.413-0.383-0.587
                    c-0.723-0.959-1.746-1.435-3.054-1.435c-1.494,0-2.688,0.559-3.607,1.68c-0.902,1.122-1.359,2.599-1.359,4.443
                    c0,1.795,0.457,3.245,1.4,4.337C116.127,59.839,117.353,60.386,118.88,60.386z M117.639,51.875c0.453-0.61,1.084-0.925,1.887-0.925
                    c0.804,0,1.434,0.304,1.893,0.914c0.46,0.612,0.685,1.453,0.685,2.533c0,1.076-0.229,1.915-0.685,2.534
                    c-0.459,0.611-1.089,0.919-1.902,0.919c-0.793,0-1.424-0.304-1.877-0.903c-0.448-0.599-0.681-1.434-0.681-2.506
                    C116.958,53.349,117.19,52.493,117.639,51.875z"/>
            </g>
                </svg>

        </p>
    </div>
</div>