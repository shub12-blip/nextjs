const siteUrl = "https://shub12-blip.github.io/nextjs";

export const dynamic = "force-static";

const feed = `<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
  <channel>
    <title>Next.js Project</title>
    <link>${siteUrl}/</link>
    <description>Updates and resources from the Next.js project website.</description>
    <language>en</language>
    <item>
      <title>Next.js Project Website</title>
      <link>${siteUrl}/</link>
      <guid isPermaLink="true">${siteUrl}/</guid>
      <description>Visit the project website and find links to its resources.</description>
    </item>
    <item>
      <title>Backlink PDF</title>
      <link>${siteUrl}/https___www%20(1).pdf</link>
      <guid isPermaLink="true">${siteUrl}/https___www%20(1).pdf</guid>
      <description>Download the backlink PDF resource.</description>
    </item>
  </channel>
</rss>`;

export function GET() {
  return new Response(feed, {
    headers: {
      "Content-Type": "application/rss+xml; charset=utf-8",
    },
  });
}
