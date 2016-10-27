$(function () {
    timbre.init();
});

var timbre = {
    init: function () {
        this.build();
    },
    build: function () {
        this.faceRecognition();
        this.events();
    },
    events: function () {
        console.log('events loaded');
    },
    faceRecognition: function () {
        var video = document.getElementById('video'),
            canvas = document.getElementById('canvas'),
            context = canvas.getContext('2d'),
            tracker = new tracking.ObjectTracker('face');

        tracker.setInitialScale(4);
        tracker.setStepSize(2);
        tracker.setEdgesDensity(.1);

        tracking.track('#video', tracker, {camera: true});

        tracker.on('track', function (event) {
            context.clearRect(0, 0, canvas.width, canvas.height);

            event.data.forEach(function (rect) {
                context.strokeStyle = 'red';
                context.strokeRect(rect.x, rect.y, rect.width, rect.height);
            });
        });
    }
};
