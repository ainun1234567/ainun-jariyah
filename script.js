document.addEventListener('DOMContentLoaded', () => {
    const ninjaNames = [
        "Naruto Uzumaki",
        "Sasuke Uchiha",
        "Sakura Haruno",
        "Kakashi Hatake",
        "Tsunade",
        "Jiraiya"
    ];

    const ninjaSelect = document.getElementById('namaNinja');

    ninjaNames.forEach(name => {
        const option = document.createElement('option');
        option.value = name;
        option.textContent = name;
        ninjaSelect.appendChild(option);
    });
});
