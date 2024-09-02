const observers = {
    showElements: document.querySelectorAll('[data-animation="show"]'),

    init() {
        this.showElements.forEach((element) => {
            element.classList.add('hidden');
        });

        this.observersIntersection = new IntersectionObserver(this.showAdd.bind(this), {threshold: 0.1});
        this.observeAction();
    },

    showAdd(entries) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show-1');
                entry.target.classList.remove('hidden');
            }
        });
    },

    observeAction() {
        this.showElements.forEach((element) => {
            this.observersIntersection.observe(element);
        });
    },
};
observers.init();


const observers2 = {
    showElements: document.querySelectorAll('[data-animation="show2"]'),

    init() {
        this.showElements.forEach((element) => {
            element.classList.add('hidden');
        });

        this.observersIntersection = new IntersectionObserver(this.showAdd.bind(this), {threshold: 0.1});
        this.observeAction();
    },

    showAdd(entries) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show-2');
                entry.target.classList.remove('hidden');
            }
        });
    },

    observeAction() {
        this.showElements.forEach((element) => {
            this.observersIntersection.observe(element);
        });
    },
};
observers2.init();

const observers3 = {
    showElements: document.querySelectorAll('[data-animation="show3"]'),

    init() {
        this.showElements.forEach((element) => {
            element.classList.add('hidden');
        });

        this.observersIntersection = new IntersectionObserver(this.showAdd.bind(this), {threshold: 0.1});
        this.observeAction();
    },

    showAdd(entries) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show-3');
                entry.target.classList.remove('hidden');
            }
        });
    },

    observeAction() {
        this.showElements.forEach((element) => {
            this.observersIntersection.observe(element);
        });
    },
};

observers3.init();


const observers4 = {
    showElements: document.querySelectorAll('[data-animation="slide"]'),

    init() {
        this.showElements.forEach((element) => {
            element.classList.add('hidden2');
        });

        this.observersIntersection = new IntersectionObserver(this.showAdd.bind(this), {threshold: 0.1});
        this.observeAction();
    },

    showAdd(entries) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('slide-left');
                entry.target.classList.remove('hidden2');
            }
        });
    },

    observeAction() {
        this.showElements.forEach((element) => {
            this.observersIntersection.observe(element);
        });
    },
};
observers4.init();