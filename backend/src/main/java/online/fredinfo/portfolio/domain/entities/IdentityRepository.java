package online.fredinfo.portfolio.domain.entities;

import java.util.List;
import java.util.UUID;

public interface IdentityRepository {
    public Identity save(Identity identity);
    public Identity findById(UUID id);
    public void delete(Identity identity);
    public void deleteById(UUID id);
    public List<Identity> findAll();
    public List<Identity> findByFirstName(String firstName);
    public List<Identity> findByLastName(String lastName);
    public List<Identity> findByEmail(String email);
    public List<Identity> findByPhone(String phone);
    public List<Identity> findByAddressId(UUID addressId);
    public List<Identity> findByGithubLink(String githubLink);
}
