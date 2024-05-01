// scripts.js

document.addEventListener('DOMContentLoaded', function() {
    const postBtn = document.getElementById('post-btn');
    const postContent = document.getElementById('post-content');
    const postsContainer = document.getElementById('posts-container');

    postBtn.addEventListener('click', function() {
        const content = postContent.value.trim();
        if (content !== '') {
            const post = document.createElement('div');
            post.className = 'post';
            post.innerHTML = `
                <p class="post-content">${content}</p>
                <p class="post-author">Posté par John Doe - ${getCurrentDate()}</p>
            `;
            postsContainer.prepend(post);
            postContent.value = '';
        }
    });

    function getCurrentDate() {
        const now = new Date();
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        return now.toLocaleDateString('fr-FR', options);
    }
});
