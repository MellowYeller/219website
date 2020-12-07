$(document).ready(() => {
    const numImages = 5;
    let index = 1;
    $('#next-button').on('click', event => {
        index;
        const nextIndex = checkIndex(index + 1);
        $(`.img${index}`).slideToggle(200, () => $(`.img${nextIndex}`).slideToggle(200));
        index = nextIndex;
    });
    $('#prev-button').on('click', event => {
        index;
        const nextIndex = checkIndex(index - 1);
        $(`.img${index}`).slideToggle(200, () => $(`.img${nextIndex}`).slideToggle(200));
        index = nextIndex;
    });

    const checkIndex = index => {
        if (index < 1) {
            index = 4;
        } else if (index > numImages) {
            index = 1;
        }
        return index;
    }
});