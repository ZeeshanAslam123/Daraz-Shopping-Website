(function( $ ) { 'use strict';
    $( document ).ready( function() {
        var DrzFrontEnd = {
            init: function() {
                this.addSliderFunctionality();
                this.onPageLoadAutoSlider();
            },

            /**
             * Add slider functionality
             */
            addSliderFunctionality: function() {

                $( 'body' ).on( 'click', '.drz-slider-dots', function() {

                    let self = $( this );
                    let parent = self.parent( '.drz-slider-dots-wrap' );
                    let imagesURL = parent.data( 'images-url' );

                    switch( self.data( 'image' ) ) {

                        case 1:
                            $( '.drz-slider-images' ).attr( 'src', ''+imagesURL+'image1.jpg' );
                            $( '.drz-slider-color' ).css( 'background', '#F15924' );
                        break;
                        case 2:
                            $( '.drz-slider-images' ).attr( 'src', ''+imagesURL+'image2.jpg' );
                            $( '.drz-slider-color' ).css( 'background', '#E9FEFD' );
                        break;
                        case 3:
                            $( '.drz-slider-images' ).attr( 'src', ''+imagesURL+'image3.jpg' );
                            $( '.drz-slider-color' ).css( 'background', '#FFEDFF' );
                        break;
                        case 4:
                            $( '.drz-slider-images' ).attr( 'src', ''+imagesURL+'image4.jpg' );
                            $( '.drz-slider-color' ).css( 'background', '#FFF1EC' );
                        break;
                        case 5:
                            $( '.drz-slider-images' ).attr( 'src', ''+imagesURL+'image5.jpg' );
                            $( '.drz-slider-color' ).css( 'background', '#E9FEFD' );
                        break;
                        case 6:
                            $( '.drz-slider-images' ).attr( 'src', ''+imagesURL+'image6.jpg' );
                            $( '.drz-slider-color' ).css( 'background', '#3D0785' );
                        break;
                        case 7:
                            $( '.drz-slider-images' ).attr( 'src', ''+imagesURL+'image7.jpg' );
                            $( '.drz-slider-color' ).css( 'background', '#E9FEFD' );
                        break;
                        case 8:
                            $( '.drz-slider-images' ).attr( 'src', ''+imagesURL+'image8.jpg' );
                            $( '.drz-slider-color' ).css( 'background', '#FDFEDE' );
                        break;
                        case 9:
                            $( '.drz-slider-images' ).attr( 'src', ''+imagesURL+'image9.jpg' );
                            $( '.drz-slider-color' ).css( 'background', '#FFEDFF' );
                        break;
                        default:
                    }
                } );
            },

            /**
             * Auto slide slider on page load
             */
            onPageLoadAutoSlider: function() {

                $.each( $( '.drz-slider-dots' ), function( index, elem ) {

                    let second = 0;
                    
                    switch( $( elem ).data( 'image' ) ) {

                        case 1:
                            second = 0;
                        break;
                        case 2:
                            second = 3000;
                        break;
                        case 3:
                            second = 6000;
                        break;
                        case 4:
                            second = 9000;
                        break;
                        case 5:
                            second = 12000;
                        break;
                        case 6:
                            second = 15000;
                        break;
                        case 7:
                            second = 18000;
                        break;
                        case 8:
                            second = 21000;
                        break;
                        case 9:
                            second = 23000;
                        break;
                        default:
                    }

                    setTimeout(function() { 
                        $( elem ).click();
                    }, second );
                } );
            },
        };

        DrzFrontEnd.init();
    });
})( jQuery );