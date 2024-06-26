# Crew-lessons

# Check the date of the code challenge and work on it

######################################################################


# Code Challenge Repository

This repository contains code challenges for students. Each student is expected to work on their own branch and submit their work accordingly. Follow the instructions below to get started.

## Initial Setup

### Clone the Repository
```sh
git clone git@github.com:BenogisInnovations/Crew-lessons.git
cd Crew-lessons
```

### Create and Switch to Your Branch
Replace `your-branch-name` with your actual name or a unique identifier.
```sh
git checkout -b your-branch-name
```

## Working on Assignments

### Pulling Updates from the Main Branch
Whenever the main branch is updated with new assignments, follow these steps:

1. **Switch to the Main Branch and Pull Updates**
   ```sh
   git checkout main
   git pull origin main
   ```

2. **Switch Back to Your Branch**
   ```sh
   git checkout your-branch-name
   ```

3. **Merge the Main Branch into Your Branch**
   ```sh
   git merge main
   ```
   If there are conflicts during the merge, resolve the conflicts, stage the resolved files, and commit the merge.
   ```sh
   # Resolve conflicts
   # Stage resolved files
   git add <file-with-conflict>
   # Commit the merge
   git commit -m "Resolved merge conflicts from main"
   ```

4. **Push Your Updated Branch**
   ```sh
   git push origin your-branch-name
   ```

## Submitting Your Work
1. Make your changes in your branch.
2. Stage and commit your changes:
   ```sh
   git add .
   git commit -m "Your commit message"
   ```
3. Push your changes to your branch:
   ```sh
   git push origin your-branch-name
   ```

## Notes
- Ensure you regularly pull updates from the main branch to keep your branch up-to-date.
- Follow the branch naming convention to avoid conflicts.
- If you encounter any issues, reach out for help.
