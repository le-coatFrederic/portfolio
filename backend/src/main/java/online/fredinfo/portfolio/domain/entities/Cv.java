package online.fredinfo.portfolio.domain.entities;

import java.util.UUID;

public class Cv {
    private final UUID id;
    private String title;
    private String description;
    private Company destination;
    private Identity identity;

    public Cv(String title, String description, Company destination, Identity identity) {
        this.id = UUID.randomUUID();
        this.title = title;
        this.description = description;
        this.destination = destination;
        this.identity = identity;
    }

    public UUID getId() {
        return id;
    }

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public Company getDestination() {
        return destination;
    }

    public void setDestination(Company destination) {
        this.destination = destination;
    }

    public Identity getIdentity() {
        return identity;
    }

    public void setIdentity(Identity identity) {
        this.identity = identity;
    }
}
