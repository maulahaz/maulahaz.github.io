# Project : Handover
***************************************************************
The system tracks **Taken-and-Returned Inventory Items**, managing tool handovers between shifts with condition reporting and acknowledgement.

Each handover records:
- Item used
- User who took it
- User who received it
- Start condition
- End condition
- Acknowledgement status

---

# Tech Stack

- **Framework:** Next.js (App Router)
- **Database:** MongoDB
- **ORM:** Prisma
- **Styling:** TailwindCSS
- **Design Priority:** Mobile-first, responsive for desktop
- **Deploy:** Netlify (https://hand-over.netlify.app)

### Installation

1. **Clone and install dependencies:**
   ```bash
   npm install
   ```

2. **Configure environment variables:**
   
   Create `.env` file:
   ```env
   DATABASE_URL="mongodb+srv://[CLUSTER-NAME]:[PASSWORD]@[CLUSTER-NAME].wk6nh5n.mongodb.net/?appName=[CLUSTER-NAME]"
   ```

3. **Initialize database:**
   ```bash
   # Generate Prisma Client
   npm run prisma:generate
   
   # Push schema to database
   npm run db:push
   
   # Seed with dummy data
   npm run db:seed
   ```

4. **Start development server:**
   ```bash
   npm run dev
   ```

5. **Open http://localhost:3000 and login!**


## Ref:


## Notes
- Started at: Week-1 of Mar26

## References:
- [Connecting Prisma to MongoDB](https://www.prisma.io/docs/prisma-orm/quickstart/mongodb)
- [Flex Tuts](www.youtube.com/watch?v=bbaKrRU4MVk)
- [netlify.com](https://hand-over.netlify.app/)
- Random Images: [https://i.pravatar.cc/200](https://i.pravatar.cc/200)
- Random Images: [https://picsum.photos/200](https://picsum.photos/200)
- Color Ref: [Colors](https://coolors.co/palettes/trending)
- Svg Icon Collection: [SVG Icons](http://svgrepo.com)
- Github Emoji Collection (for Markdown): [Emoji](https://github.com/ikatyang/emoji-cheat-sheet)
- Emoji Collection (for HTML): [Emoji](https://html-css-js.com/html/character-codes/)
- Markdown Editor: https://pandao.github.io/editor.md/index.html
- Markdown to HTML: https://markdowntohtml.com
- Image to Text: https://www.imagetotext.info/

## Snapshot:
![Handover](public/images/snapshot/handover.jpg)