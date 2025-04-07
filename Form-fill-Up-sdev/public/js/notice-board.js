document.addEventListener("DOMContentLoaded", function () {
    const noticeList = document.getElementById("notice-list");

    // Sample notices with links (replace with API fetch)
    const notices = [
        { date: "2025-03-01", text: "Event A update", link: "/notices/1" },
        { date: "2025-03-15", text: "Meeting reminder", link: "/notices/2" },
        { date: "2025-03-28", text: "Registration deadline", link: "/notices/3" }
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

            // Create anchor tag
            const a = document.createElement("a");
            a.href = notice.link;
            a.textContent = `${notice.date}: ${notice.text}`;
            a.target = "_blank"; // Opens in new tab (optional)
            a.style.textDecoration = "none";
            a.style.color = "#007bff"; // Bootstrap blue color

            li.appendChild(a);
            noticeList.appendChild(li);
        });
    } else {
        noticeList.innerHTML = "<li>No recent notices.</li>";
    }
});
