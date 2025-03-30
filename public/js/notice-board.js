document.addEventListener("DOMContentLoaded", function () {
    const noticeList = document.getElementById("notice-list");

    // Sample notices (replace with API fetch)
    const notices = [
        { date: "2025-03-01", text: "Event A update." },
        { date: "2025-03-15", text: "Meeting reminder." },
        { date: "2025-03-28", text: "Registration deadline." }
    ];

    // Get current date and filter last 30 days notices
    const today = new Date();
    const thirtyDaysAgo = new Date();
    thirtyDaysAgo.setDate(today.getDate() - 30);

    const filteredNotices = notices.filter(notice => {
        const noticeDate = new Date(notice.date);
        return noticeDate >= thirtyDaysAgo;
    });

    // Display filtered notices
    if (filteredNotices.length > 0) {
        filteredNotices.forEach(notice => {
            const li = document.createElement("li");
            li.textContent = `${notice.date}: ${notice.text}`;
            noticeList.appendChild(li);
        });
    } else {
        noticeList.innerHTML = "<li>No recent notices.</li>";
    }
});
