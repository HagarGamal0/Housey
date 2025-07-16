                    /*banner slider*/
                    const sliderContainer = document.querySelector('.slider-container')
                    const slideRight = document.querySelector('.right-slide')
                    const slideLeft = document.querySelector('.left-slide')
                    const upButton = document.querySelector('.up-button')
                    const downButton = document.querySelector('.down-button')
                    const slidesLength = slideRight.querySelectorAll('div').length
                    
                    let activeSlideIndex = 0
                    
                    slideLeft.style.top = `-${(slidesLength - 1) * 100}vh`
                    
                    upButton.addEventListener('click', () => changeSlide('up'))
                    downButton.addEventListener('click', () => changeSlide('down'))
                    
                    const changeSlide = (direction) => {
                        const sliderHeight = sliderContainer.clientHeight
                        if(direction === 'up') {
                            activeSlideIndex++
                            if(activeSlideIndex > slidesLength - 1) {
                                activeSlideIndex = 0
                            }
                        } else if(direction === 'down') {
                            activeSlideIndex--
                            if(activeSlideIndex < 0) {
                                activeSlideIndex = slidesLength - 1
                            }
                        }
                    
                        slideRight.style.transform = `translateY(-${activeSlideIndex * sliderHeight}px)`
                        slideLeft.style.transform = `translateY(${activeSlideIndex * sliderHeight}px)`
                    }
                    
                                                           // product slider
                    const productContainers = document.querySelectorAll('.product-container');
                    const nxtBtn = document.querySelectorAll('.nxt-btn');
                    const preBtn = document.querySelectorAll('.pre-btn');
                    
                    productContainers.forEach((item, i) => {
                        let containerDimensions = item.getBoundingClientRect();
                        let containerWidth = containerDimensions.width;
                    
                        nxtBtn[i].addEventListener('click', () => {
                            item.scrollLeft += containerWidth;
                        })
                        preBtn[i].addEventListener('click', () => {
                            item.scrollLeft -= containerWidth;
                        })
                    })
                    // **********************************************************************
                    // Loading
                    var myVar;
                    
                    
                    function loading() {
                        myVar = setTimeout(showPage, 500);
                        document.getElementById("loader").style.display = "block";
                        document.getElementById("myBody").style.display = "none";
                    }
                    
                    function showPage() {
                        document.getElementById("myBody").style.display = "block";
                        document.getElementById("loader").style.display = "none";
                    }
                    // ***********************************************************************
                    // refresh
                    
                    
                    