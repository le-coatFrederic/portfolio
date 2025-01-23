package online.fredinfo.portfolio.domain.entities;

import java.util.UUID;

public class Company {
    private final UUID id;
    private String name;
    private Address address;

    public Company(String name, Address address) {
        this.id = UUID.randomUUID();
        this.name = name;
        this.address = address;
    }

    public UUID getId() {
        return id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public Address getAddress() {
        return address;
    }

    public void setAddress(Address addresse) {
        this.address = addresse;
    }
}
