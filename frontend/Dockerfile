FROM node:14-alpine

# Set working directory
WORKDIR /var/www/html/frontend

# Install dependencies
COPY frontend/package*.json ./
RUN npm install

# Copy application code
COPY ./frontend .

# Build application
RUN npm run build

# Set command
CMD ["npm", "run", "dev"]