package online.fredinfo.portfolio.domain.entities;

import java.util.List;
import java.util.UUID;

public interface HobbyRepository {
    public Hobby save(Hobby hobby);
    public Hobby findById(UUID id);
    public List<Hobby> findAll();
    public List<Hobby> findByName(String name);
    public void delete(Hobby hobby);
    public void deleteById(UUID id);
}
