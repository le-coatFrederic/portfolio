package online.fredinfo.portfolio.domain.entities;

import java.util.UUID;

public class Hobby {
    private final UUID id;
    private String name;
    private String description;

    public Hobby(String name, String description) {
        this.id = UUID.randomUUID();
        this.name = name;
        this.description = description;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public UUID getId() {
        return id;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }
}
